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
</template>