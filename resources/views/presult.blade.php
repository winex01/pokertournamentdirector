<table class="table table-bordered">

	<thead>

		<tr>

			<th style="color:white;">LEVELS</th>

			<th>BLINDS</th>

		</tr>

	</thead>

	<tbody>

		@foreach ($tournamentpaginate as $tag)

	    <tr>


	        <td>{{ $tag->level }}</td>

	         <td>{{ $tag->blinds }}</td>

	    </tr>

	    @endforeach

	</tbody>

</table>

{!! $tournamentpaginate->render() !!}