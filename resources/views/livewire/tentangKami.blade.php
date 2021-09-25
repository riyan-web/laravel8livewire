<div>
    @include('livewire.navbar')
    <section id="main-container" class="main-container">
        <div class="container">
        <div class="row text-center">
            <div class="col-12">
            <h2 class="section-title">Reaching our Office</h2>
            <h3 class="section-sub-title">Find Our Location</h3>
            </div>
        </div>
        <!--/ Title row end -->
    
        <div class="row">
            <div class="col-md-4">
            <div class="ts-service-box-bg text-center h-100">
                <span class="ts-service-icon icon-round">
                <i class="fas fa-map-marker-alt mr-0"></i>
                </span>
                <div class="ts-service-box-content">
                <h4>Visit Our Office</h4>
                <p>9051 Constra Incorporate, USA</p>
                </div>
            </div>
            </div><!-- Col 1 end -->
    
            <div class="col-md-4">
            <div class="ts-service-box-bg text-center h-100">
                <span class="ts-service-icon icon-round">
                <i class="fa fa-envelope mr-0"></i>
                </span>
                <div class="ts-service-box-content">
                <h4>Email Us</h4>
                <p>office@Constra.com</p>
                </div>
            </div>
            </div><!-- Col 2 end -->
    
            <div class="col-md-4">
            <div class="ts-service-box-bg text-center h-100">
                <span class="ts-service-icon icon-round">
                <i class="fa fa-phone-square mr-0"></i>
                </span>
                <div class="ts-service-box-content">
                <h4>Call Us</h4>
                <p>(+9) 847-291-4353</p>
                </div>
            </div>
            </div><!-- Col 3 end -->
    
        </div><!-- 1st row end -->
    
        <div class="gap-60"></div>
    
        <div class="google-map">
            <div id="map" class="map" data-latitude="40.712776" data-longitude="-74.005974" data-marker="images/marker.png" data-marker-name="Constra"></div>
        </div>
    
        <div class="gap-40"></div
        @include('livewire.footer')
</div>
  