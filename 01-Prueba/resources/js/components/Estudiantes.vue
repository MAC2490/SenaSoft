<template>
    <div>
        <h5>{{ message }}</h5>

        <div class="col-5 m-4 p-0">
	        <label for="form-label">Nombre:</label>
	        <input class="form-control" type="text" v-model="formulario.nombre_cliente" >

	        <label for="form-label">Apellido:</label>
	        <input class="form-control" type="text" v-model="formulario.apellido_cliente" >
        </div>

        <table class="table table-bordered">
        	<thead>
        		<tr>
        			<th>id</th>
        			<th>nombre</th>
        			<th>apellido</th>
        			<th>documento</th>
        			<th></th>
        		</tr>
        	</thead>
        	<tbody>
        		<tr v-for="cliente in listaEstudiantes">
        			<td>{{ cliente.id }}</td>
        			<td>{{ cliente.nombre }}</td>
        			<td>{{ cliente.apellido }}</td>
        			<td>{{ cliente.documento }}</td>
        			<td>
        				<button class="btn btn-primary" @click="imprimirDetalle(cliente)"> ACCION </button>
        			</td>
        		</tr>
        	</tbody>
        </table>
    </div>
</template>

<script>
export default {
	props: [ 'listado' ],
	data() {
        return {
        	formulario: {
        		nombre_cliente: "",
        		apellido_cliente: "",
        	},
            message: 'componente de estudiantes',
            listaEstudiantes: [],
        }
    },
    created(){
    	this.listaEstudiantes = this.listado;
    },
    methods: {

    	imprimirDetalle(objeto){
    		
    		this.formulario.nombre_cliente = objeto.nombre;
    		this.formulario.apellido_cliente = objeto.apellido;

    	},

    },
};
</script>