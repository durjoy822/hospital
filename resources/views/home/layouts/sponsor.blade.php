<!-- Clients Section -->
<section class="clients-section">
    <div class="auto-container">
        <!-- Sponsors Outer -->
        <div class="sponsors-outer">

            <!--clients carousel-->
            <ul class="clients-carousel owl-carousel owl-theme">
                @foreach($sponsors as $sponsor)
                    <li class="slide-item"> <a href="#"><img src="{{ asset($sponsor->logo) }}"
                                                             alt=""></a>
                    </li>
                @endforeach
            </ul>

        </div>

    </div>
</section>
