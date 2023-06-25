<x-backend.layouts.master>

    <style>
        #carosoul{
            display: flex;
            justify-content: center;
        }
    </style>

    {{--  HEADING START HERE  --}}
    <div class="my-5">
        <center>
            <strong>
                <p style="font-size: 25px;">"My Portfolio" is the largest platform for searching job in Bangladesh.</p>
                <p style="font-size: 20px;">Come, see and enrich your career.</p>
            </strong>
        </center>
    </div>
    {{--  HEADING END HERE  --}}

    {{--  CAROSOUL START HERE  --}}
    <div id="carosoul">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="width: 700px;">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{url('ui/backend/portfolio deisgn/images/ambition-&-hardwork.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Ambition & Hardwork</h5>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{url('ui/backend/portfolio deisgn/images/confidance.JPG')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Confidence</h5>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{url('ui/backend/portfolio deisgn/images/success.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Success</h5>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>
    {{--  CAROSOUL END HERE  --}}


    {{--  OTHERS INFORMATION START HERE  --}}
    <div class="row" style="margin-top: 40px;">
        <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
            <div class="col mt-5">
                <h4>About Portfolio</h4>
                <p style=" text-align: justify;">An international portfolio is a selection of stocks and other assets that focuses on foreign markets rather than domestic ones. If well designed, an international portfolio gives the investor exposure to emerging and developed markets and provides diversification.</p>
            </div>
            <div class="col mt-5">
                <h4>Necessity of international portfolio</h4>
                <p style=" text-align: justify;">A portfolio is a living and changing collection of records that reflect your accomplishments, skills, experiences, and attributes. It highlights and showcases samples of some of your best work, along with life experiences, values and achievements.</p>
            </div>
            <div class="col mt-5">
                <h4>Benefits of international portfolio</h4>
                <p style=" text-align: justify;">The main reasons to invest internationally are to capture higher expected returns and to diversify portfolios across a broader array of asset classes. This can lower the overall volatility of a portfolio and increase the likelihood of benefiting from the return premiums associated with different risk factors.</p>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 mb-5">
            <div class="col mt-5">
                <h4>About Portfolio</h4>
                <p style=" text-align: justify;">An international portfolio is a selection of stocks and other assets that focuses on foreign markets rather than domestic ones. If well designed, an international portfolio gives the investor exposure to emerging and developed markets and provides diversification.</p>
            </div>
            <div class="col mt-5">
                <h4>Necessity of international portfolio</h4>
                <p style=" text-align: justify;">A portfolio is a living and changing collection of records that reflect your accomplishments, skills, experiences, and attributes. It highlights and showcases samples of some of your best work, along with life experiences, values and achievements.</p>
            </div>
            <div class="col mt-5">
                <h4>Benefits of international portfolio</h4>
                <p style=" text-align: justify;">The main reasons to invest internationally are to capture higher expected returns and to diversify portfolios across a broader array of asset classes. This can lower the overall volatility of a portfolio and increase the likelihood of benefiting from the return premiums associated with different risk factors.</p>
            </div>
        </div>
    </div>
    {{--  OTHERS INFORMATION END HERE  --}}

</x-backend.layouts.master>
