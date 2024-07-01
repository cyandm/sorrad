<?php
$first_notes = get_field( 'first_notes' );
$main_notes = get_field( 'main_notes' );
$end_notes = get_field( 'end_notes' );


$notes = [ 
	[ 
		'label' => 'رایحه اولیه',
		'fields' => $first_notes
	],
	[ 
		'label' => 'رایحه میانی',
		'fields' => $main_notes
	],
	[ 
		'label' => 'رایحه ماندگار',
		'fields' => $end_notes
	]
];


?>

<div class="mt-10 mb-7">
	<div class="border-b py-4 text-3xl">اطلاعات محصول</div>
</div>

<div class="space-y-3 max-md:space-y-12">
	<?php foreach ( $notes as $note ) :

		if ( $note['fields'] === null )
			continue;

		?>
		<div class='flex items-center max-lg:hidden'>
			<div class="text-xl w-36 justify-center items-center flex">
				<span><?php echo $note['label'] ?></span>
			</div>

			<div class="px-4 py-8 border w-full flex justify-between rounded-2xl items-center">
				<div class="flex gap-2">
					<?php foreach ( $note['fields'] as $id ) : ?>
						<div term-id="<?php echo $id ?>">
							<span>
								<?php echo get_term( $id )->name ?>
								<?php echo end( $note['fields'] ) !== $id ? '/' : '' ?>
							</span>
							<span class="hidden">
								<?php echo get_term( $id )->description ?>
							</span>
						</div>
					<? endforeach; ?>
				</div>

				<div class="flex gap-2">
					<?php foreach ( $note['fields'] as $id ) : ?>
						<span term-id="<?php echo $id ?>">
							<?php echo wp_get_attachment_image( get_field( 'custom_image', "product_notes_$id" ), 'thumbnail', false, [ 'class' => 'rounded-full !size-14' ] ) ?>
						</span>
					<? endforeach; ?>
				</div>
			</div>
		</div>

		<div class="lg:hidden space-y-2 ">
			<div class="text-xl">
				<?php echo $note['label'] ?>
			</div>

			<div class="border p-2 rounded-md divide-y space-y-4">
				<?php foreach ( $note['fields'] as $id ) : ?>
					<div class="flex justify-between items-center pt-3">
						<div>
							<?php echo get_term( $id )->name ?>
						</div>

						<div>
							<?php echo wp_get_attachment_image( get_field( 'custom_image', "product_notes_$id" ), 'thumbnail', false, [ 'class' => 'rounded-full !size-14' ] ) ?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	<?php endforeach; ?>
</div>