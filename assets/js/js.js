$(document).ready(function () {

  // // Filtre de recherche génral
  // $("#search").on("keyup", function () {
  //   var value = $(this).val().toLowerCase();
  //   $("#dataList tr").filter(function () {
  //     $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
  //   });
  // });

  // // Filtre company name
  // $("#name-search").on("keyup", function () {
  //   var input, filter, table, tr, td, i, txtValue;
  //   input = document.getElementById("name-search");
  //   filter = input.value.toUpperCase();
  //   table = document.getElementById("table-name");
  //   tr = table.getElementsByTagName("tr");
  //   for (i = 0; i < tr.length; i++) {
  //     td = tr[i].getElementsByTagName("companyName")[0];
  //     if (td) {
  //       txtValue = td.textContent || td.innerText;
  //       if (txtValue.toUpperCase().indexOf(filter) > -1) {
  //         tr[i].style.display = "";
  //       } else {
  //         tr[i].style.display = "none";
  //       }
  //     }
  //   }
  // });

  // // Filtre secteur d'activité
  // $("#activity-search").on("keyup", function () {
  //   var input, filter, table, tr, td, i, txtValue;
  //   input = document.getElementById("activity-search");
  //   filter = input.value.toUpperCase();
  //   table = document.getElementById("table-name");
  //   tr = table.getElementsByTagName("tr");
  //   for (i = 0; i < tr.length; i++) {
  //     td = tr[i].getElementsByTagName("companyActivity")[0];
  //     if (td) {
  //       txtValue = td.textContent || td.innerText;
  //       if (txtValue.toUpperCase().indexOf(filter) > -1) {
  //         tr[i].style.display = "";
  //       } else {
  //         tr[i].style.display = "none";
  //       }
  //     }
  //   }
  // });

  // // Filtre localité
  // $("#locality-search").on("keyup", function () {
  //   var input, filter, table, tr, td, i, txtValue;
  //   input = document.getElementById("locality-search");
  //   filter = input.value.toUpperCase();
  //   table = document.getElementById("table-name");
  //   tr = table.getElementsByTagName("tr");
  //   for (i = 0; i < tr.length; i++) {
  //     td = tr[i].getElementsByTagName("locality")[0];
  //     if (td) {
  //       txtValue = td.textContent || td.innerText;
  //       if (txtValue.toUpperCase().indexOf(filter) > -1) {
  //         tr[i].style.display = "";
  //       } else {
  //         tr[i].style.display = "none";
  //       }
  //     }
  //   }
  // });


  // // Filtre nombre stagiaires
  // $('#interns-search').on("keyup", function () {

  //   var value = $('#interns-search').val();

  //   table = document.getElementById("table-name");
  //   tr = table.getElementsByTagName("tr");
  //   for (i = 0; i < tr.length; i++) {
  //     td = tr[i].getElementsByTagName("nbAcceptedInterns")[0];
  //     if (td) {
  //       if ($(td).text() < value) {
  //         tr[i].style.display = "none";
  //       } else {
  //         tr[i].style.display = "";
  //       }
  //     }
  //   }
  // });

  // // Filtre évaluation pilote
  // $('#review-pilot-search').on("keyup", function () {

  //   var value = $('#review-pilot-search').val();

  //   table = document.getElementById("table-name");
  //   tr = table.getElementsByTagName("tr");
  //   for (i = 0; i < tr.length; i++) {
  //     td = tr[i].getElementsByTagName("reviewPilot")[0];
  //     if (td) {
  //       if ($(td).text() < value) {
  //         tr[i].style.display = "none";
  //       } else {
  //         tr[i].style.display = "";
  //       }
  //     }
  //   }
  // });

  // // Filtre évaluation
  // $('#rating-search').on("keyup", function () {

  //   var value = $('#rating-search').val();

  //   table = document.getElementById("table-name");
  //   tr = table.getElementsByTagName("tr");
  //   for (i = 0; i < tr.length; i++) {
  //     td = tr[i].getElementsByTagName("rating")[0];
  //     if (td) {
  //       if ($(td).text() < value) {
  //         tr[i].style.display = "none";
  //       } else {
  //         tr[i].style.display = "";
  //       }
  //     }
  //   }
  // });


  // // OFFER

  // // Filtre compétence
  // $("#competence-search").on("keyup", function () {
  //   var input, filter, table, tr, td, i, txtValue;
  //   input = document.getElementById("competence-search");
  //   filter = input.value.toUpperCase();
  //   table = document.getElementById("table-name");
  //   tr = table.getElementsByTagName("tr");
  //   for (i = 0; i < tr.length; i++) {
  //     td = tr[i].getElementsByTagName("competence")[0];
  //     if (td) {
  //       txtValue = td.textContent || td.innerText;
  //       if (txtValue.toUpperCase().indexOf(filter) > -1) {
  //         tr[i].style.display = "";
  //       } else {
  //         tr[i].style.display = "none";
  //       }
  //     }
  //   }
  // });

  // // Filtre localité
  // $("#locality-search").on("keyup", function () {
  //   var input, filter, table, tr, td, i, txtValue;
  //   input = document.getElementById("locality-search");
  //   filter = input.value.toUpperCase();
  //   table = document.getElementById("table-name");
  //   tr = table.getElementsByTagName("tr");
  //   for (i = 0; i < tr.length; i++) {
  //     td = tr[i].getElementsByTagName("locality")[0];
  //     if (td) {
  //       txtValue = td.textContent || td.innerText;
  //       if (txtValue.toUpperCase().indexOf(filter) > -1) {
  //         tr[i].style.display = "";
  //       } else {
  //         tr[i].style.display = "none";
  //       }
  //     }
  //   }
  // });

  // // Filtre durée
  // $("#duration-search").on("keyup", function () {
  //   var input, filter, table, tr, td, i, txtValue;
  //   input = document.getElementById("duration-search");
  //   filter = input.value.toUpperCase();
  //   table = document.getElementById("table-name");
  //   tr = table.getElementsByTagName("tr");
  //   for (i = 0; i < tr.length; i++) {
  //     td = tr[i].getElementsByTagName("duration")[0];
  //     if (td) {
  //       txtValue = td.textContent || td.innerText;
  //       if (txtValue.toUpperCase().indexOf(filter) > -1) {
  //         tr[i].style.display = "";
  //       } else {
  //         tr[i].style.display = "none";
  //       }
  //     }
  //   }
  // });

  // // Filtre company name
  // $("#name-search").on("keyup", function () {
  //   var input, filter, table, tr, td, i, txtValue;
  //   input = document.getElementById("name-search");
  //   filter = input.value.toUpperCase();
  //   table = document.getElementById("table-name");
  //   tr = table.getElementsByTagName("tr");
  //   for (i = 0; i < tr.length; i++) {
  //     td = tr[i].getElementsByTagName("companyName")[0];
  //     if (td) {
  //       txtValue = td.textContent || td.innerText;
  //       if (txtValue.toUpperCase().indexOf(filter) > -1) {
  //         tr[i].style.display = "";
  //       } else {
  //         tr[i].style.display = "none";
  //       }
  //     }
  //   }
  // });

  // // Filtre rémunération
  // $('#remuneration-search').on("keyup", function () {

  //   var value = $('#remuneration-search').val();

  //   table = document.getElementById("table-name");
  //   tr = table.getElementsByTagName("tr");
  //   for (i = 0; i < tr.length; i++) {
  //     td = tr[i].getElementsByTagName("remuneration")[0];
  //     if (td) {
  //       if ($(td).text() < value) {
  //         tr[i].style.display = "none";
  //       } else {
  //         tr[i].style.display = "";
  //       }
  //     }
  //   }
  // });

  // // Filtre nombre places
  // $('#places-search').on("keyup", function () {

  //   var value = $('#places-search').val();

  //   table = document.getElementById("table-name");
  //   tr = table.getElementsByTagName("tr");
  //   for (i = 0; i < tr.length; i++) {
  //     td = tr[i].getElementsByTagName("nbPlaces")[0];
  //     if (td) {
  //       if ($(td).text() < value) {
  //         tr[i].style.display = "none";
  //       } else {
  //         tr[i].style.display = "";
  //       }
  //     }
  //   }
  // });



  // //USER

  // // Filtre nom
  // $("#name-search").on("keyup", function () {
  //   var input, filter, table, tr, td, i, txtValue;
  //   input = document.getElementById("name-search");
  //   filter = input.value.toUpperCase();
  //   table = document.getElementById("table-name");
  //   tr = table.getElementsByTagName("tr");
  //   for (i = 0; i < tr.length; i++) {
  //     td = tr[i].getElementsByTagName("name")[0];
  //     if (td) {
  //       txtValue = td.textContent || td.innerText;
  //       if (txtValue.toUpperCase().indexOf(filter) > -1) {
  //         tr[i].style.display = "";
  //       } else {
  //         tr[i].style.display = "none";
  //       }
  //     }
  //   }
  // });

  // // Filtre prénom
  // $("#firstName-search").on("keyup", function () {
  //   var input, filter, table, tr, td, i, txtValue;
  //   input = document.getElementById("firstName-search");
  //   filter = input.value.toUpperCase();
  //   table = document.getElementById("table-name");
  //   tr = table.getElementsByTagName("tr");
  //   for (i = 0; i < tr.length; i++) {
  //     td = tr[i].getElementsByTagName("firstName")[0];
  //     if (td) {
  //       txtValue = td.textContent || td.innerText;
  //       if (txtValue.toUpperCase().indexOf(filter) > -1) {
  //         tr[i].style.display = "";
  //       } else {
  //         tr[i].style.display = "none";
  //       }
  //     }
  //   }
  // });

  // // Filtre centre
  // $("#center-search").on("keyup", function () {
  //   var input, filter, table, tr, td, i, txtValue;
  //   input = document.getElementById("center-search");
  //   filter = input.value.toUpperCase();
  //   table = document.getElementById("table-name");
  //   tr = table.getElementsByTagName("tr");
  //   for (i = 0; i < tr.length; i++) {
  //     td = tr[i].getElementsByTagName("center_")[0];
  //     if (td) {
  //       txtValue = td.textContent || td.innerText;
  //       if (txtValue.toUpperCase().indexOf(filter) > -1) {
  //         tr[i].style.display = "";
  //       } else {
  //         tr[i].style.display = "none";
  //       }
  //     }
  //   }
  // });

  // // Filtre promotion
  // $("#promotion-search").on("keyup", function () {
  //   var input, filter, table, tr, td, i, txtValue;
  //   input = document.getElementById("promotion-search");
  //   filter = input.value.toUpperCase();
  //   table = document.getElementById("table-name");
  //   tr = table.getElementsByTagName("tr");
  //   for (i = 0; i < tr.length; i++) {
  //     td = tr[i].getElementsByTagName("promotion")[0];
  //     if (td) {
  //       txtValue = td.textContent || td.innerText;
  //       if (txtValue.toUpperCase().indexOf(filter) > -1) {
  //         tr[i].style.display = "";
  //       } else {
  //         tr[i].style.display = "none";
  //       }
  //     }
  //   }
  // });


  $("#next-btn").click(function () {
    $("#current-page").text(parseInt($("#current-page").text()) + 1);
    if ($("#current-page").text() <= 1) {
      $("#previous-btn").hide();
    }
    else {
      $("#previous-btn").show();
    }
    callback();
  });

  $("#previous-btn").click(function () {
    $("#next-btn").show();
    $("#current-page").text(parseInt($("#current-page").text()) - 1);
    if ($("#current-page").text() <= 1) {
      $("#previous-btn").hide();
    }
    else {
      $("#previous-btn").show();
    }
    callback();
  });

  initFilters();
});


function initFilters() {
  $(".input-search").on("keyup", callback);
  $("#nbr-per-page").on("change", callback);
}

function callback() {
  function myFunction() {

    //Pagination
    let premiereCondition = true;
    let sql = "SELECT * from company WHERE (";
    let limit = $("#nbr-per-page").val();
    let offset = limit * (parseInt($("#current-page").text()) - 1);
    let trouveunnom;
    //Si tous les champs des filtres sont vides
    if ($("#name-search").val() == "" && $("#activity-search").val() == ""
      && $("#locality-search").val() == "" && $("#interns-search").val() == ""
      && $("#review-pilot-search").val() == "" && $("#rating-search").val() == "") {
      sql = "SELECT * from company LIMIT " + limit + ' OFFSET ' + offset;
      trouveunnom = 'SELECT * from company LIMIT ' + limit + ' OFFSET ' + (parseInt(offset) + parseInt(limit));

    } else {
      if ($("#name-search").val() != "") {
        sql += "companyName LIKE '%" + $("#name-search").val() + "%'";
        premiereCondition = false;
      }

      if ($("#activity-search").val() != "") {
        if (!premiereCondition) sql += " AND ";
        sql += "companyActivity LIKE '%" + $("#activity-search").val() + "%'";
        premiereCondition = false;
      }

      if ($("#locality-search").val() != "") {
        if (!premiereCondition) sql += " AND ";
        sql += "locality LIKE '%" + $("#locality-search").val() + "%'";
        premiereCondition = false;
      }

      if ($("#interns-search").val() != "") {
        if (!premiereCondition) sql += " AND ";
        sql += "nbAcceptedInterns > " + $("#interns-search").val();
        premiereCondition = false;
      }

      if ($("#review-pilot-search").val() != "") {
        if (!premiereCondition) sql += " AND ";
        sql += "reviewPilot > " + $("#review-pilot-search").val();
        premiereCondition = false;
      }

      if ($("#rating-search").val() != "") {
        if (!premiereCondition) sql += " AND ";
        sql += "rating > " + $("#rating-search").val();
      }
      trouveunnom = sql;
      trouveunnom += ') LIMIT ' + limit + ' OFFSET ' + (parseInt(offset) + parseInt(limit));
  
      sql += ') LIMIT ' + limit + ' OFFSET ' + offset;
    }

   
    // Envois en ajax la requête au CONTROLLER
    console.log(sql);
    $.get("../CONTROLLER/majTable.php",
      {
        sql: sql,
        trouveunnom: trouveunnom
      },
      function (data) {
        if(data.trouveunnom == 0)
          $("#next-btn").hide();
          
        $("#dataList").replaceWith(data.html);
      }, "json");

  }
  // stop for sometime if needed
  setTimeout(myFunction, 100);


}