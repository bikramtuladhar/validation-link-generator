<?php

@foreach (array_unique($errors->all()) as $error)
				<?php static $i=0;?>
				<li><a href="#error{{$i}}">{{ $error }}</a></li>
				<?php $i++;?>
@endforeach

?>