<template>
    <v-card >
        <!-- Navbar -->
        <v-toolbar dark prominent>
            <v-toolbar-title>Tesis JVMC</v-toolbar-title>

            <v-spacer></v-spacer>
            <v-btn @click.stop="drawer = !drawer">Perfil</v-btn>
            <v-btn><a href="/logout">Cerrar Sesión</a></v-btn>
        </v-toolbar>
    </v-card>

     <v-card>
        <v-layout>
        <v-navigation-drawer
            v-model="drawer"
            temporary
        >
            <v-list-item
            prepend-avatar="https://randomuser.me/api/portraits/men/78.jpg"
            >{{ user.name }}</v-list-item>

            <v-divider></v-divider>

            <v-list density="compact" nav>
                <v-list-item prepend-icon="mdi-view-dashboard">{{user.email}}</v-list-item>
                <v-list-item prepend-icon="mdi-forum">{{user.rol}}</v-list-item>
            <v-btn @click.stop="drawer = !drawer" block>Salir</v-btn>
            </v-list>
        </v-navigation-drawer>
        </v-layout>
    </v-card>

</template>

<script>
    import Navigation from './partes/navigationPerfil.vue'
    export default {
        components: {
            Navigation,
        },
        
        data (){
            return {
                user: '',
                drawer: null,
            }
        },

        created(){
            axios.get('/homeUser')
            .then(response => {
            this.user = response.data
            })
            .catch(e => {
            console.log(e);
            });
        }
    }
</script>