jQuery(document).ready(function( $ ) {

  // Back to top button
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });
  $('.back-to-top').click(function(){
    $('html, body').animate({scrollTop : 0},1500, 'easeInOutExpo');
    return false;
  });


  // Real view height for mobile devices
  if (window.matchMedia("(max-width: 767px)").matches) {
    $('#intro').css({ height: $(window).height() });
  }

  // Initiate the wowjs animation library
  new WOW().init();

  // Initialize Venobox
  $('.venobox').venobox({
    bgcolor: '',
    overlayColor: 'rgba(6, 12, 34, 0.85)',
    closeBackground: '',
    closeColor: '#fff'
  });

  // Initiate superfish on nav menu
  $('.nav-menu').superfish({
    animation: {
      opacity: 'show'
    },
    speed: 400
  });

  // Smooth scroll for the menu and links with .scrollto classes
  $('.nav-menu a, #mobile-nav a, .scrollto').on('click', function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      if (target.length) {
        var top_space = 0;

        if ($('#header').length) {
          top_space = $('#header').outerHeight();

          if( ! $('#header').hasClass('header-fixed') ) {
            top_space = top_space - 20;
          }
        }

        $('html, body').animate({
          scrollTop: target.offset().top - top_space
        }, 1500, 'easeInOutExpo');

        if ($(this).parents('.nav-menu').length) {
          $('.nav-menu .menu-active').removeClass('menu-active');
          $(this).closest('li').addClass('menu-active');
        }

        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
          $('#mobile-body-overly').fadeOut();
        }
        
        return false;
      }
    }
  });

  // setupMobileMenu();

  // function setupMobileMenu() {
  //   const $body = $('body');
  //   const $btn  = $('.menu-mobile');
  //   let   $back = $('#mobile-backdrop');

  //   if (!$back.length) {
  //     $back = $('<div id="mobile-backdrop" aria-hidden="true"></div>').appendTo('body');
  //   }

  //   // 1) Clique sempre conta no botão (não nos spans)
  //   $btn.find('*').css('pointer-events','none');

  //   function openMenu() {
  //     $body.addClass('mobile-open');
  //     $btn.addClass('is-open').attr('aria-expanded', 'true');
  //   }
  //   function closeMenu() {
  //     $body.removeClass('mobile-open');
  //     $btn.removeClass('is-open').attr('aria-expanded', 'false');
  //     $('#nav-menu-container .dropdown')
  //       .removeClass('open')
  //       .find('> .submenu-toggle').attr('aria-expanded','false');
  //   }
  //   function toggleMenu() { $body.hasClass('mobile-open') ? closeMenu() : openMenu(); }

  //   $btn.on('click', toggleMenu);

  //   // 2) NÃO feche ao clicar no backdrop (como você pediu)
  //   // $back.on('click', closeMenu);

  //   // (opcional) feche ao clicar em um link do menu:
  //   $('#nav-menu-container').on('click', 'a', function () { closeMenu(); });

  //   // submenus no mobile
  //   $('#nav-menu-container').on('click', '.submenu-toggle', function (e) {
  //     if (!window.matchMedia('(max-width: 991px)').matches) return;
  //     e.preventDefault();
  //     const $li = $(this).closest('.dropdown');
  //     const open = $li.hasClass('open');
  //     $li.siblings('.dropdown').removeClass('open').find('> .submenu-toggle').attr('aria-expanded','false');
  //     $li.toggleClass('open', !open);
  //     $(this).attr('aria-expanded', String(!open));
  //   });

  //   $(window).on('resize', function () {
  //     if (window.matchMedia('(min-width: 992px)').matches) closeMenu();
  //   });
  // }


  setupMobileDrawer();

  function setupMobileDrawer() {
    const $body = $('body');
    const $btn  = $('.menu-mobile');
    $btn.off('click');                        // PATCH: remove binds antigos no botão
    $btn.find('*').css('pointer-events','none'); // PATCH: clique vai pro botão, não pros spans


    // cria overlay do drawer uma vez
    let $drawer = $('#mobile-drawer');
    if (!$drawer.length) {
      $drawer = $(`
        <div id="mobile-drawer" aria-hidden="true">
          <nav class="drawer" role="dialog" aria-modal="true">
            <ul class="drawer-menu"></ul>
          </nav>
        </div>
      `).appendTo('body');

      // clona os itens do seu menu desktop para dentro do drawer
      $('#nav-menu-container .nav-menu')
        .children()
        .clone(true, false)       // copia estrutura (sem duplicar handlers antigos)
        .appendTo($drawer.find('.drawer-menu'));
    }

    const $menu = $drawer.find('.drawer-menu');

    function open() {
      $body.addClass('mobile-open');
      $btn.addClass('is-open').attr('aria-expanded','true');
    }
    function close() {
      $body.removeClass('mobile-open');
      $btn.removeClass('is-open').attr('aria-expanded','false');
      // fecha qualquer submenu aberto no drawer
      $menu.find('.dropdown')
        .removeClass('open')
        .find('> .submenu-toggle').attr('aria-expanded','false');
    }

    // 2) Botão abre/fecha (com preventDefault e stopPropagation)
    $btn.off('.drawer').on('click.drawer', function(e){
      e.preventDefault(); e.stopPropagation();
      $body.hasClass('mobile-open') ? close() : open();
    });

    // 3) Dropdowns (Chamada, Informações, Pós-evento): delegação no drawer
    $menu.off('.drawer').on('click.drawer', '.submenu-toggle', function(e){
      e.preventDefault(); e.stopPropagation();
      const $li = $(this).closest('.dropdown');
      const isOpen = $li.hasClass('open');

      // fecha irmãos (efeito acordeão)
      $li.siblings('.dropdown')
        .removeClass('open')
        .find('> .submenu-toggle').attr('aria-expanded','false');

      $li.toggleClass('open', !isOpen);
      $(this).attr('aria-expanded', String(!isOpen));
    });

    // 4) (opcional) fechar ao clicar em um link do menu:
    $menu.on('click.drawer', 'a', function(){ close(); });

    // 5) fechar ao voltar para desktop
    $(window).off('resize.drawer').on('resize.drawer', function(){
      if (window.matchMedia('(min-width: 992px)').matches) close();
    });

    // 6) tecla ESC fecha (qualquer estado)
    $(document).off('keydown.drawer').on('keydown.drawer', function(e){
      if (e.key === 'Escape') close();
    });
  }


});

