<script>
<?php echo( "var tableauFromPHP = new Array();\n" );$lunettes[0][0]="a";$lunettes[0][1]="b";$lunettes[1][0]="c";$lunettes[1][1]="d";
for( $i = 0; $i < count( $lunettes ); $i++ ) { 
	echo( "tableauFromPHP[$i]=new Array();");
	for( $j = 0; $j < count( $lunettes[$i] ); $j++ ) { echo( "tableauFromPHP[$i][$j] = '{$lunettes[$i][$j]}';\n" ); } 
} ?>
</script>