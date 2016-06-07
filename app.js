var mutantsUrl = 'https://mutant-school.herokuapp.com/api/v1/mutants';

function processMutants(mutants) {
  $.each(mutants, function(i, mutant){
    addMutant(mutant);
  });
}


function addMutant(mutant){
  var li = $('li.template').clone().removeClass('template').att('data-id')
  $('body').append('<li data-id="">'+ mutant.mutant_name +'</li>');

}


$.get({
  url: mutantsUrl,
  success: processMutants,
});

$.delete({
url: mutantsUrl,
success: processMutants,

});
