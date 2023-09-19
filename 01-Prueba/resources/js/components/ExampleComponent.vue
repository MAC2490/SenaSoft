<template>
    <div>
        <p>{{ message }}</p>
        <table>
        	<thead border="1">
        		<tr>
        			<th>cedula</th>
        			<th>nombres</th>
        		</tr>
        	</thead>
        	<tbody>
        		<tr v-for="estudiante in listaEstudiantes">
        			<td>{{ estudiante.cedula }}</td>
        			<td>{{ estudiante.nombres }}</td>
        		</tr>
        	</tbody>
        </table>
    </div>
</template>

<script>
export default {
	data() {
        return {
            message: 'ESTE ES EL COMPONENTE DE EJEMPLO EN VUE',
            listaEstudiantes: [
            					{ 'cedula':'108800', 'nombres': 'Yeison' },
            					{ 'cedula':'108801', 'nombres': 'Mauricio' },
            					{ 'cedula':'108802', 'nombres': 'Oscar' },
            				  ],
        }
    },
};
</script>