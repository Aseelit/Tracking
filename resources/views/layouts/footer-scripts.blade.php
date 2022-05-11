
    {{-- <!-- BEGIN: Vendor JS--> --}}
    <script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}"></script>
    {{-- <!-- BEGIN Vendor JS--> --}}
{{--  --}}
    {{-- <!-- BEGIN: Page Vendor JS--> --}}
    {{-- <!-- END: Page Vendor JS--> --}}

    {{-- <!-- BEGIN: Theme JS--> --}}
    <script src="{{ asset('app-assets/js/core/app-menu.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/core/app.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/customizer.min.js') }}"></script>
    {{-- <!-- END: Theme JS--> --}}
    
    <script src="{{ asset('app-assets/css-rtl/plugins/maps/map-leaflet.min.css') }}"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    @notifyJs
    

    {{-- <!-- BEGIN: Page JS--> --}}
    {{-- <!-- END: Page JS--> --}}

    <script>
      $(window).on('load',  function(){
        if (feather) {
          feather.replace({ width: 14, height: 14 });
        }
      })
    </script>

