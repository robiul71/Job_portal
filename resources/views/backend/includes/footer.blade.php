<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
<script src="{{asset('backend/asset')}}/vendor/global/global.min.js"></script>
<script src="{{asset('backend/asset')}}/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

<!-- Apex Chart -->
<script src="{{asset('backend/asset')}}/vendor/apexchart/apexchart.js"></script>
<script src="{{asset('backend/asset')}}/vendor/chartjs/chart.bundle.min.js"></script>

<!-- Chart piety plugin files -->
<script src="{{asset('backend/asset')}}/vendor/peity/jquery.peity.min.js"></script>

<!-- Dashboard 1 -->
<script src="{{asset('backend/asset')}}/js/dashboard/dashboard-1.js"></script>

<script src="{{asset('backend/asset')}}/endor/owl-carousel/owl.carousel.js"></script>

<script src="{{asset('backend/asset')}}/js/custom.min.js"></script>
<script src="{{asset('backend/asset')}}/js/dlabnav-init.js"></script>


<script>
function JobickCarousel()
	{

		/*  testimonial one function by = owl.carousel.js */
		jQuery('.front-view-slider').owlCarousel({
			loop:false,
			margin:30,
			nav:true,
			autoplaySpeed: 3000,
			navSpeed: 3000,
			autoWidth:true,
			paginationSpeed: 3000,
			slideSpeed: 3000,
			smartSpeed: 3000,
			autoplay: false,
			animateOut: 'fadeOut',
			dots:true,
			navText: ['', ''],
			responsive:{
				0:{
					items:1,

					margin:10
				},

				480:{
					items:1
				},

				767:{
					items:3
				},
				1750:{
					items:3
				}
			}
		})
	}

	jQuery(window).on('load',function(){
		setTimeout(function(){
			JobickCarousel();
		}, 1000);
	});
</script>
