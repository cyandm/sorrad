<div id="preloader"
	 class="fixed bg-white inset-0 z-50 flex justify-center items-center transition-opacity duration-500 opacity-100 pointer-events-none">
	<div class="preloader-loader"></div>
</div>

<style>
	.preloader-loader {
		width: 50px;
		aspect-ratio: 1;
		border-radius: 50%;
		background: #000;
		-webkit-mask: radial-gradient(circle closest-side at 50% 40%, #0000 94%, #000);
		transform-origin: 50% 40%;
		animation: l25 1s infinite linear;
	}

	@keyframes l25 {
		100% {
			transform: rotate(1turn)
		}
	}
</style>