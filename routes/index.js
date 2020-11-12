var express = require('express');
var router = express.Router();

/* GET home page. */
// router.get('/', function(req, res, next) {
//   res.render('index', { title: 'Express' });
// });


router.get('/welcome', function(req, res) {
  res.render('welcome');
});

router.get('/voice-call', function(req, res) {
  res.render('voice-call');
});

router.get('/video-call', function(req, res) {
  res.render('voice-call');
});

router.get('/mainlayout', function(req, res) {
  res.render('mainlayout');
});

router.get('/hd', function(req, res) {
  res.render('hd');
});

router.get('/term-condition', function(req, res) {
  res.render('term-condition');
});

router.get('/social-media', function(req, res) {
  res.render('social-media');
});

router.get('/search', function(req, res) {
  res.render('search');
});

router.get('/schedule-timings', function(req, res) {
  res.render('schedule-timings');
});

router.get('/reviews', function(req, res) {
  res.render('reviews');
});

router.get('/register', function(req, res) {
  res.render('register');
});

router.get('/profile-settings', function(req, res) {
  res.render('profile-settings');
});

router.get('/privacy-policy', function(req, res) {
  res.render('privacy-policy');
});

router.get('/patient-profile', function(req, res) {
  res.render('patient-profile');
});

router.get('/patient-dashboard', function(req, res) {
  res.render('patient-dashboard');
});

router.get('/my-patients', function(req, res) {
  res.render('my-patients');
});

router.get('/map-list', function(req, res) {
  res.render('map-list');
});

router.get('/map-grid', function(req, res) {
  res.render('map-grid');
});

// router.get('/login', function(req, res) {
//   res.render('login');
// });

router.get('/invoices', function(req, res) {
  res.render('invoices');
});

router.get('/invoice-view', function(req, res) {
  res.render('invoice-view');
});

router.get('/index', function(req, res) {
  res.render('index');
});

router.get('/index-two', function(req, res) {
  res.render('index-two');
});

router.get('/home', function(req, res) {
  res.render('home');
});

router.get('/forgot-password', function(req, res) {
  res.render('forgot-password');
});

router.get('/favourites', function(req, res) {
  res.render('favourites');
});

// router.get('/error', function(req, res) {
//   res.render('error');
// });

router.get('/edit-prescription', function(req, res) {
  res.render('edit-prescription');
});

router.get('/edit-billing', function(req, res) {
  res.render('edit-billing');
});

router.get('/doctor-register', function(req, res) {
  res.render('doctor-register');
});

router.get('/doctor-profile', function(req, res) {
  res.render('doctor-profile');
});

router.get('/doctor-profile-settings', function(req, res) {
  res.render('doctor-profile-settings');
});

router.get('/doctor-dashboard', function(req, res) {
  res.render('doctor-dashboard');
});

router.get('/doctor-change-password', function(req, res) {
  res.render('doctor-change-password');
});

router.get('/components', function(req, res) {
  res.render('components');
});

router.get('/checkout', function(req, res) {
  res.render('checkout');
});

router.get('/chat', function(req, res) {
  res.render('chat');
});

router.get('/chat-doctor', function(req, res) {
  res.render('chat-doctor');
});

router.get('/change-password', function(req, res) {
  res.render('change-password');
});

router.get('/calendar', function(req, res) {
  res.render('calendar');
});

router.get('/booking', function(req, res) {
  res.render('booking');
});

router.get('/booking-success', function(req, res) {
  res.render('booking-success');
});

router.get('/blog-list', function(req, res) {
  res.render('blog-list');
});

router.get('/blog-grid', function(req, res) {
  res.render('blog-grid');
});

router.get('/blog-details', function(req, res) {
  res.render('blog-details');
});

router.get('/blank-page', function(req, res) {
  res.render('blank-page');
});

router.get('/appointments', function(req, res) {
  res.render('appointments');
});

router.get('/add-prescription', function(req, res) {
  res.render('add-prescription');
});

router.get('/add-billing', function(req, res) {
  res.render('add-billing');
});





module.exports = router;
