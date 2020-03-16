/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
var Masonry = require( 'masonry-layout' );


$(document).ready(function() {
  $.ajaxSetup({
    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
  });


  if ($( "#chart-requests-pending-inreview" ).length) {
    Morris.Donut({
      element: 'chart-requests-pending-inreview',
      data: [
        {label: "En attente", value: 34},
        {label: "En cours de traitement", value: 27},
      ],
      colors: [
        '#6631db',
        '#03a5e5',
      ]
    });
  }
  if ($( "#chart-requests-closed-refused" ).length) {
    Morris.Donut({
      element: 'chart-requests-closed-refused',
      data: [
        {label: "Cloturées", value: 78},
        {label: "Refusées", value: 22},
      ],
      colors: [
        '#3adb54',
        '#ed423e'
      ]
    });
  }
  
  if ($( "#chart-last-requests" ).length) {
    Morris.Bar({
      element: 'chart-last-requests',
      data: [
        { y: 'Mai 2019', a: 271, b: 90 },
        { y: 'Juin 2019', a: 224, b: 90 },
        { y: 'Juillet 2019', a: 354, b: 90 },
        { y: 'Aout 2019', a: 322, b: 90 },
        { y: 'Septembre 2019', a: 297,  b: 65 },
        { y: 'Octobre 2019', a: 285,  b: 40 },
        { y: 'Novembre 2019', a: 301,  b: 65 },
        { y: 'Décembre 2019', a: 316,  b: 40 },
        { y: 'Janvier 2020', a: 268,  b: 65 },
        { y: 'Février 2020', a: 284, b: 90 }
      ],
      xkey: 'y',
      ykeys: ['a'],
      labels: ['Demandes']
    });
  }

  // Formulaires

  var quill_masterclass_program = new Quill('#quill-masterclass-program', {theme: 'snow'});
  var quill_masterclass_info = new Quill('#quill-masterclass-info', {theme: 'snow'});
  var quill = new Quill('#quill-answer', {theme: 'snow'});

  $("#form-masterclass").submit(function() {
    $("#input-masterclass-program").val(quill_masterclass_program.container.firstChild.innerHTML);
    $("#input-masterclass-info").val(quill_masterclass_info.container.firstChild.innerHTML);
  });

  $("#form-question").submit(function() {
    $("#input-answer").val(quill.container.firstChild.innerHTML);
  });

  $("#faq-sortable").sortable({
    axis: 'y',
    update: function(event, ui) {
      var data = $(this).sortable('serialize');
      console.log(data);
      $.ajax({
        data: data,
        type: 'POST',
        url: '/admin/faq/sort',
        success:function(data) {
          console.log(data);
        }
      });
    }
  });

  $("#weblinks-sortable").sortable({
    axis: 'y',
    update: function(event, ui) {
      var data = $(this).sortable('serialize');
      console.log(data);
      $.ajax({
        data: data,
        type: 'POST',
        url: '/admin/weblinks/sort',
        success:function(data) {
          console.log(data);
        }
      });
    }
  });




  // SweetAlerts

  $("#form-question-delete").submit(function(e) {
    e.preventDefault();
    Swal.fire({
      title: 'Voulez-vous vraiment supprimer cette question ?',
      text: "Cette opération est irréversible.",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#ff0059',
      confirmButtonText: 'Confirmer la suppression.',
      cancelButtonText: 'Annuler',
    }).then((result) => {
      if (result.value) {
        Swal.fire('Et voilà !', 'La question a été supprimée.', 'success');
        $(this).unbind('submit').submit();
      }
    })
  });

  $("#form-brand-delete").submit(function(e) {
    e.preventDefault();
    Swal.fire({
      title: 'Voulez-vous vraiment supprimer cette marque ?',
      text: "Cette opération est irréversible et supprimera tous ses éléments attachés (produits, documents, etc ...).",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#ff0059',
      confirmButtonText: 'Confirmer la suppression.',
      cancelButtonText: 'Annuler',
    }).then((result) => {
      if (result.value) {
        Swal.fire('Et voilà !', 'La marque a été supprimée.', 'success');
        $(this).unbind('submit').submit();
      }
    })
  });

  $("#form-masterclass-delete").submit(function(e) {
    e.preventDefault();
    Swal.fire({
      title: 'Voulez-vous vraiment supprimer cette formation ?',
      text: "Cette opération est irréversible.",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#ff0059',
      confirmButtonText: 'Confirmer la suppression.',
      cancelButtonText: 'Annuler',
    }).then((result) => {
      if (result.value) {
        Swal.fire('Et voilà !', 'La formation a été supprimée.', 'success');
        $(this).unbind('submit').submit();
      }
    })
  });

  $("#form-phonecard-delete").submit(function(e) {
    e.preventDefault();
    Swal.fire({
      title: 'Voulez-vous vraiment supprimer cette carte ?',
      text: "Cette opération est irréversible.",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#ff0059',
      confirmButtonText: 'Confirmer la suppression.',
      cancelButtonText: 'Annuler',
    }).then((result) => {
      if (result.value) {
        Swal.fire('Et voilà !', 'La carte a été supprimée.', 'success');
        $(this).unbind('submit').submit();
      }
    })
  });

  $("#form-document-delete").submit(function(e) {
    e.preventDefault();
    Swal.fire({
      title: 'Voulez-vous vraiment supprimer ce document ?',
      text: "Cette opération est irréversible.",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#ff0059',
      confirmButtonText: 'Confirmer la suppression.',
      cancelButtonText: 'Annuler',
    }).then((result) => {
      if (result.value) {
        Swal.fire('Et voilà !', 'Le document a été supprimé.', 'success');
        $(this).unbind('submit').submit();
      }
    })
  });

  $("#form-product-delete").submit(function(e) {
    e.preventDefault();
    Swal.fire({
      title: 'Voulez-vous vraiment supprimer ce produit ?',
      text: "Cette opération est irréversible.",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#ff0059',
      confirmButtonText: 'Confirmer la suppression.',
      cancelButtonText: 'Annuler',
    }).then((result) => {
      if (result.value) {
        Swal.fire('Et voilà !', 'Le produit a été supprimé.', 'success');
        $(this).unbind('submit').submit();
      }
    })
  });

  $("#form-video-delete").submit(function(e) {
    e.preventDefault();
    Swal.fire({
      title: 'Voulez-vous vraiment supprimer cette vidéo ?',
      text: "Cette opération est irréversible.",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#ff0059',
      confirmButtonText: 'Confirmer la suppression.',
      cancelButtonText: 'Annuler',
    }).then((result) => {
      if (result.value) {
        Swal.fire('Et voilà !', 'La vidéo a été supprimée.', 'success');
        $(this).unbind('submit').submit();
      }
    })
  });

  $("#form-m3pin-import").submit(function(e) {
    e.preventDefault();
    $('#alert-m3pin-import').removeClass('d-none').hide().fadeIn('fast', function() {
      $("#form-m3pin-import").unbind('submit').submit();
    });
  });


  // documents
  var grid = document.querySelector('#documents-grid');
  var msnry = new Masonry( grid, {
    itemSelector: '.grid-item',
    columnWidth: '.grid-sizer',
  });

  var grid = document.querySelector('#favorite-products-grid');
  var msnry2 = new Masonry( grid, {
    itemSelector: '.grid-item',
    columnWidth: '.grid-sizer',
  });

  $('.video-item img, .video-item h4').click(function() {
    var $embed = "";
    $youtubeID    = $(this).data('videoid');
    $embed        = 'https://www.youtube.com/embed/'+$youtubeID;
    console.log($embed);
    $('.video-container iframe').attr('src', $embed);
    $('#video-overlay').removeClass('d-none').hide().fadeIn();

    $("#close-btn").click(function() {
      $('#video-overlay').fadeOut(function() {
        $embed = '';
        $('.video-container iframe').attr('src', $embed);
      });
    });
  });

  // Vues eclatées
  $currentFamily = null;
  $currentSeason = null;

  $("#family-selector li").click(function() {
    if($currentFamily == "f-"+  $(this).data('slug')) {
      $currentFamily = null;
      $("#family-selector li").removeClass('current-item');
    } else {
      $currentFamily = "f-"+$(this).data('slug');
      $("#family-selector li").removeClass('current-item');
      $(this).addClass('current-item');
    }
    filterProducts();
    console.log($currentFamily);
  });

  $("#season-selector li").click(function() {
    if($currentSeason == "s-"+$(this).data('year')) {
      $currentSeason = null;
      $("#season-selector li").removeClass('current-item');
    } else {
      $currentSeason = "s-"+$(this).data('year');
      $("#season-selector li").removeClass('current-item');
      $(this).addClass('current-item');
    }
    console.log("Current Season : "+$currentSeason);
    filterProducts();
  });

  function filterProducts() {
    if($currentFamily == null && $currentSeason == null) {
      console.log("Aucun filtre sélectionné >>> ");
      $('.product').each(function() {
          $(this).show();
      });
    } else if($currentFamily != null && $currentSeason == null) {
      console.log("Filtre FAMILLE >>> ");
      $('.product').hide();
      $('.product').each(function() {
        if($(this).hasClass($currentFamily)) {
          $(this).show();
        }
      });
    } else if($currentFamily == null && $currentSeason != null) {
      console.log("Filtre SAISON >>> ");
      $('.product').hide();
      if($(this).hasClass($currentSeason)) {
        $(this).show();
      }
    } else {
      console.log("Filtres FAMILLE + SAISON >>> ");
      $('.product').hide();
      console.log(4);
      $('.product').each(function() {
        if( ($(this).hasClass($currentSeason)) && ($(this).hasClass($currentFamily))) {
              $(this).show();
        }
      })
    }
  }


  $('a.fav-video').click(function(e) {
    e.preventDefault();
    $(this).toggleClass('btn-danger');
    $(this).toggleClass('btn-light');
    $.ajax({
      data: {id: $(this).data('video')},
      type: 'POST',
      url: '/videos/toggle-favorite',
      success: function(data) {
        console.log('success');
      }
    })
  });

  $('a.fav-ev').click(function(e) {
    e.preventDefault();
    $(this).toggleClass('btn-danger');
    $(this).toggleClass('btn-light');
    $.ajax({
      data: {id: $(this).data('ev')},
      type: 'POST',
      url: '/vues-eclatees/toggle-favorite',
      success: function(data) {
        $.notify({
          title: '<strong> Et voilà</strong>',
          message: 'Le produit a été ajouté à la liste des favoris.'
        },{
          type: 'success'
        });
      }
    })
  });

  $('a.remfav-ev').click(function(e) {
    e.preventDefault();
    // $(this).toggleClass('btn-danger');
    // $(this).toggleClass('btn-light');
    $.ajax({
      data: {id: $(this).data('ev')},
      type: 'POST',
      dataType: 'json',
      url: '/vues-eclatees/remove-favorite',
    });
    $(this).parent().fadeOut(function(){
      $(this).parent().remove();
      $(this).parent().parent().remove();
      msnry2.layout();
    });
  });


});