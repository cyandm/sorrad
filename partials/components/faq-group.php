<?php
$acf_field = $args['acf_field'] ?? null;
$term_ids = $args['term_ids'] ?? [];
$type = $args['type'] ?? 'query';
$postId = $args['post-id'] ?? null;
$title = $args['title'] ?? '';

$faq_group = [];

$query_args = [ 
	'post_type' => 'faq',
	'fields' => 'ids',
	'tax_query' => [ 
		[ 
			'taxonomy' => 'faq-cat',
			'filed' => 'term_id',
			'terms' => $term_ids,
		]
	]
];

if ( $type === 'query' ) {
	$faq_group = get_posts( $query_args );
}

if ( $type === 'acf' ) {
	$faq_group = get_field( $acf_field, $postId );
}



if ( empty( $faq_group ) )
	return;

?>


<div class="text-2xl font-bold pb-4">
	<?php echo $title ?>
</div>

<div class="py-6 px-4 border border-gray-100 divide-y divide-primary-80 rounded-3xl">

	<?php foreach ( $faq_group as $index => $postId ) : ?>
		<?php cyn_get_card( 'faq', [ 'post-id' => $postId ] ) ?>
	<?php endforeach; ?>
</div>