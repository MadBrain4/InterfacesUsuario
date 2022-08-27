<template>
  <v-app>
    <Navigation></Navigation>
    <v-card width="400px" class="mt-2 mx-auto" flat>
    <v-form ref="form" v-model="valid" lazy-validation>
      <!-- Campo Nombre -->
      <v-text-field
        v-model="form.name"
        :rules="nombreReglas"
        label="Nombre"
        required
      ></v-text-field>
      <!-- Campo Correo -->   
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
      <!-- Campo Repetir Contraseña--> 
      <v-text-field
        v-model="form.password_confirmation"
        label="Repetir Contraseña"
        :rules="[repetirContraRules.required]"
        type="password"
        class="input-group--focused"
        required
      ></v-text-field>
      <!-- Campo Rol --> 
      <v-select
        v-model="form.rol"
        :items="items"
        :rules="[v => !!v || 'Rol es requerido']"
        label="Rol"
        required
      ></v-select>
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

      <!-- Modal para registrado satisfactoriamente -->
      <v-dialog v-model="dialog">
        <v-card>
          <v-card-text>
            Usuario Registrado Satisfactoriamente
          </v-card-text>
          <v-card-actions>
          <v-btn color="primary" block @click="dialog = false">
            <a href="/login">
              Cerrar
            </a>
          </v-btn>
          </v-card-actions>
        </v-card>
      </v-dialog>
    </v-app>
</template>

<script>
  import Navigation from './partes/navigation.vue'
  export default {
    components: {
      Navigation,
    },
    data: () => ({
      dialog: false,
      valid: true,
      form: {
        name: '',
        email: '',
        password:'',
        password_confirmation: '',
        rol: null,
      },
      nombreReglas: [
        v => !!v || 'Nombre es requerido',
      ],
      correoReglas: [
        v => !!v || 'Correo es requerido',
        v => /.+@.+\..+/.test(v) || 'Correo debe ser valido',
      ],
      contraRules: {
        required: v => !!v || 'Contraseña es requerida',
        min: v => v.length >= 8 || 'Min 8 characters',
      },
      repetirContraRules: {
        required: v => !!v || 'Repetir Contraseña es requerida',
      },
      items: [
        'Estudiante',
        'Tutor',
        'Jurado',
        'Director',
        'Administrador'
      ],
    }),
    methods: {
      validate () {
        this.$refs.form.validate()
        axios.post('/register', this.form)
          .then(function (response) {
            console.log(response);
          })
          .catch(function (error) {
            console.log(error);
          });
          this.dialog = true;
      },
      reset () {
        this.$refs.form.reset()
      },
    },
  }
</script>