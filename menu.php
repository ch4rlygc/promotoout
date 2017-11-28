<div class="">
  <nav class="indigo" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo left-align">PromoToout</a>
     <ul class="right hide-on-med-and-down">
        <li><a href="#">Inicio</a></li>
        <li><a href="#iconsection">Categorìas</a></li>
        <li><a href="#">Nosotros</a></li>
        <li><a href="#"><i class="material-icons">search</i></a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#iconsection" id="menu1">Categorìas</a></li>
        <li><a href="#">Tiendas</a></li>
        <li><a href="#">Marcas</a></li>
        <li><a href="#">Nosotros</a></li>
        <li><a href="#"><i class="material-icons">search</i></a></li>
      </ul>
      <a href="" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
</div>

<script>
 $("document").ready(function(){
   $(function(){
   $('a[href*=#]').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var $target = $(this.hash);
        $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
        if ($target.length) {
           var targetOffset = $target.offset().top;

           $('html,body').animate({scrollTop: targetOffset}, 500);
           return false;
        }
      }
      });
    });
 });
</script>