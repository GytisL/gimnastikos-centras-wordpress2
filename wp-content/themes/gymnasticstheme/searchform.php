<!-- <form role="role" method="get" action="<?php //echo home_url( '/' ); ?> ">
	<input type="search" class="form-control" placeholder="Įveskite žodį ir spauskite Enter" value="<?php //echo get_search_query(); ?>" name="s" title="Search" />
</form> -->

<form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
  <input type="search" class="form-control" placeholder="<?php echo esc_attr_x( 'Įveskite žodį ir pasirinkite norimą skiltį', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Ieškokite:', 'label' ) ?>" data-swplive="true"/>
  <!-- <button type="submit" role="button" class="btn btn-default right"/><span class="glyphicon glyphicon-search white">Ieškoti</span></button> -->
</form>