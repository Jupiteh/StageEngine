// self.addEventListener('install', e => {
//     console.log('1');
//     console.log('SW marche');
//     e.waitUntil(
//         caches.open("static").then(cache => {
//             return cache.addAll(["./assets/images/logo.png"

//                 // VUE
//                 , "./VUE/account.php"
//                 , "./VUE/compare.php"
//                 , "./VUE/delete.php"
//                 , "./VUE/entrepriseCU.php"
//                 , "./VUE/footer.php"
//                 , "./VUE/indexFront.php"
//                 , "./VUE/link.php"
//                 , "./VUE/listeEntreprise.php"
//                 , "./VUE/listeOffer.php"
//                 , "./VUE/listeUser.php"
//                 , "./VUE/mail.php"
//                 , "./VUE/mentionsLegales.php"
//                 , "./VUE/navbar.php"
//                 , "./VUE/offerCU.php"
//                 , "./VUE/rightAssignation.php"
//                 , "./VUE/tablinks.php"
//                 , "./VUE/userCU.php"

//                 // CONTROLLER
//                 , "./CONTROLLER/apply.php"
//                 , "./CONTROLLER/authController.php"
//                 , "./CONTROLLER/companyCruQueries.php"
//                 , "./CONTROLLER/compareCompanyController.php"
//                 , "./CONTROLLER/filterCompany.php"
//                 , "./CONTROLLER/filterOffer.php"
//                 , "./CONTROLLER/filterUser.php"
//                 , "./CONTROLLER/getRight.php"
//                 , "./CONTROLLER/mailController.php"
//                 , "./CONTROLLER/offerCruQueries.php"
//                 , "./CONTROLLER/permChecker.php"
//                 , "./CONTROLLER/rightAssignationController.php"
//                 , "./CONTROLLER/userCruQueries.php"
//                 , "./CONTROLLER/wishlist.php"
//                 // MODEL
//             ]);

//         })
//     );
// });

// self.addEventListener("fetch", e => {
//     console.log('2');

//     console.log(`Url: ${e.request.url}`);
//     e.respondWith(
//         caches.match(e.request).then(response => {
//             return response || fetch(e.request);
//         })
//     );
// }); 