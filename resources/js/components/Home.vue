<template>
<v-card
    max-width="400"
    class="mx-auto"
    >
        <v-system-bar
        color="pink darken-2"
        dark
        >
        <v-spacer></v-spacer>

        </v-system-bar>

        <v-app-bar
        dark
        color="pink"
        >
        <v-app-bar-nav-icon></v-app-bar-nav-icon>

        <v-toolbar-title>My App</v-toolbar-title>

        <v-spacer></v-spacer>

        <v-btn icon>
            <v-icon>mdi-magnify</v-icon>
        </v-btn>
        </v-app-bar>

        <v-container
                fluid
                style="min-height:0;text-align:center"
                grid-list-lg
            >
        <v-row dense>
            <v-col cols="12">
            <v-card
                color="#fff"
                :outlined="true"
            >
                <v-card-title primary-title style="justify-content:center">
                    <div>
                        <img src="#" style="margin:20px" />

                        <h3 class="headline mb-0">ServiceStack Vuetify project</h3>

                        <v-form>
                            <v-text-field
                                label="Name"
                                v-model="txtName"
                                :counter="30"
                                required
                            ></v-text-field>
                        </v-form>

                        <h2 class="result">{{result}}</h2>
                    </div>                  
                </v-card-title>
                <v-card-actions style="justify-content:center">
                    <v-btn text color="green" to="/">Home</v-btn>
                </v-card-actions>
            </v-card>
            </v-col>
        </v-row>
        </v-container>
    </v-card>
</template>

<script>
export default{
    
}

</script>

<style>

</style>