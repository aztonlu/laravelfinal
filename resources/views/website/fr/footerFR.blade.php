 <footer >
            
    <div class="footer-top wow fadeInUp animated" style="padding-top: 0px;" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInUp;background-color: rgb(23,58,27)">
        


<div class="container-fluid">
  <div class="row" style="text-align: center; color: white;">
 
     <div class="col-xs-12 col-md-8">
      <div class="row" sty>
        <div class="col-xs-12">
            <h2><strong>TOURS</strong></h2>
        </div>
    
      </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3">
                   <a href="{{url('')}}/fr/tours/decouverte/Aventure"><h4>Aventure</h4></a>
              <a href="{{url('')}}/fr/tours/decouverte/Aventure"><img src="{{url('')}}/img/Aventura.jpg" height="60%" width="60%"> 
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                  <a href="{{url('')}}/fr/tours/decouverte/High-Mountain"><h4>Haute Montagne</h4></a>
            <a href="{{url('')}}/fr/tours/decouverte/High-Mountain"><img src="{{url('')}}/images/Alta_montaña.jpg" height="60%" width="60%" class="img-circle"></a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                  <a href="{{url('')}}/fr/tours/decouverte/Discover"><h4>Decouverte</h4></a>
              <a href="{{url('')}}/fr/tours/decouverte/Discover"><img src="{{url('')}}/images/Descubir.jpg" height="60%" width="60%" class="img-circle"></a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <a href="{{url('')}}/fr/tours/decouverte/Excursions"><h4>Excursions</h4></a>
                <a href="{{url('')}}/fr/tours/decouverte/Excursions"><img src="{{url('')}}/images/Excursiones.jpg" height="60%" width="60%" class="img-circle"></a>
            </div>
        </div>
    </div>
     <div class="col-xs-12 col-md-4">
            <h2><strong>S'inscrire</strong></h2>
        
            <h5 style="color: #fff;">Abonnez-vous pour rester à jour sur les nouvelles et les notifications</h5>
          
              <form action="{{route('publicnewsletters.store')}}" method="post">
            {{ csrf_field() }}
              <?php $url = Request::path();?>
              <input type="hidden" name="language" value="{{$url}}">
              <input name='email' placeholder='example@mail.com' class="form-control text-center" type="email" style="width:90%">
              <button type="submit" class="btn-submit text-center" style="width:90%">Inscrivez-vous maintenant</button>
                  
          </form>
           
    </div>
  </div>
</div>
    </div>
 
    
  </footer>