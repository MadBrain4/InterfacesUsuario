<template>
    <v-app>
    <Navigation></Navigation>
    <v-card width="400px" class="mt-2 mx-auto" flat>
    <v-form ref="form" v-model="valid" lazy-validation>  
    
    <v-text-field
      v-model="form.email"
      :rules="correoReglas"
      label="Correo"
      required
    ></v-text-field>
    <!-- Campo  Contraseña--> 
    <v-text-field 
      v-model="form.password" 
      label="Contraseña"
      :rules="[contraRules.required, contraRules.min]"
      type="password"
      class="input-group--focused"
      required
    ></v-text-field>
    <!-- Boton Enviar -->
    <v-btn
      :disabled="!valid"
      color="success"
      class="mr-4"
      @click="[validate()]"
    >
      Enviar
    </v-btn>
    <!-- Boton Resetear Parametros-->
    <v-btn
      color="error"
      class="mr-4"
      @click="reset"
    >
      Resetear Parametros
    </v-btn>

    </v-form>
    </v-card>
    </v-app>
</template>

<script>
    import Navigation from './partes/navigation.vue'
    export default {
      components: {
        Navigation,
      },
    data: () => ({
        valid: true,
        form: {
            email: '',
            password:'', 
        },
        correoReglas: [
            v => !!v || 'Correo es requerido',
            v => /.+@.+\..+/.test(v) || 'Correo debe ser valido',
        ],
        contraRules: {
            required: v => !!v || 'Contraseña es requerida',
            min: v => v.length >= 8 || 'Min 8 characters',
        },
    }),

    methods: {
      validate () {
        this.$refs.form.validate()
        axios.post('/login', this.form)
          .then(function (response) {
            console.log(response);
          })
          .catch(function (error) {
            console.log(error);
          });
      },
      reset () {
        this.$refs.form.reset()
      },
    }
    }
</script>