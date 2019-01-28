<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Test Web Page 2</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
    crossorigin="anonymous">

  <link rel="stylesheet" href="main.css">
</head>

<body style="background-color:rgb(216, 255, 242)">
  <h1>Test Web Page 2</h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique doloribus voluptatum reiciendis omnis? Quo
    tempora velit sequi pariatur blanditiis nihil itaque perferendis, at, voluptatem cum quibusdam, dolorem labore
    delectus! Deleniti in at maiores omnis cum! Maiores, harum neque? Optio ipsam sunt rerum dignissimos aliquid nihil
    laborum sint aliquam modi numquam.</p>

  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam nemo in magni esse quod excepturi impedit natus hic
    officiis illum sit officia, quaerat possimus ipsam voluptates earum, nostrum expedita tempora error. Deserunt esse
    totam perspiciatis sit facilis rem optio odit, quas accusantium officia aspernatur, est quidem veritatis impedit.
    Praesentium, repudiandae?</p>

  <h2>Test Text</h2>
  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam nemo in magni esse quod excepturi impedit natus hic
    officiis illum sit officia, quaerat possimus ipsam voluptates earum, nostrum expedita tempora error. Deserunt esse
    totam perspiciatis sit facilis rem optio odit, quas accusantium officia aspernatur, est quidem veritatis impedit.
    Praesentium, repudiandae?</p>
  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam nemo in magni esse quod excepturi impedit natus hic
    officiis illum sit officia, quaerat possimus ipsam voluptates earum, nostrum expedita tempora error. Deserunt esse
    totam perspiciatis sit facilis rem optio odit, quas accusantium officia aspernatur, est quidem veritatis impedit.
    Praesentium, repudiandae?</p>

  <h2>Test Text</h2>
  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam nemo in magni esse quod excepturi impedit natus hic
    officiis illum sit officia, quaerat possimus ipsam voluptates earum, nostrum expedita tempora error. Deserunt esse
    totam perspiciatis sit facilis rem optio odit, quas accusantium officia aspernatur, est quidem veritatis impedit.
    Praesentium, repudiandae?</p>
  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam nemo in magni esse quod excepturi impedit natus hic
    officiis illum sit officia, quaerat possimus ipsam voluptates earum, nostrum expedita tempora error. Deserunt esse
    totam perspiciatis sit facilis rem optio odit, quas accusantium officia aspernatur, est quidem veritatis impedit.
    Praesentium, repudiandae?</p>

  <h2>Test Text</h2>
  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam nemo in magni esse quod excepturi impedit natus hic
    officiis illum sit officia, quaerat possimus ipsam voluptates earum, nostrum expedita tempora error. Deserunt esse
    totam perspiciatis sit facilis rem optio odit, quas accusantium officia aspernatur, est quidem veritatis impedit.
    Praesentium, repudiandae?</p>
  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam nemo in magni esse quod excepturi impedit natus hic
    officiis illum sit officia, quaerat possimus ipsam voluptates earum, nostrum expedita tempora error. Deserunt esse
    totam perspiciatis sit facilis rem optio odit, quas accusantium officia aspernatur, est quidem veritatis impedit.
    Praesentium, repudiandae?</p>

  <?php 
  if (!empty($_GET['mark'])) { ?>
     <div class="slide-container">
          <div id="slide-3" class="slider">
            <i class="slider__icon far fa-times-circle"></i>
            <div class="wrapper">
              <p class="slider__text">Sample Text Line 1 Sample Text Line 2</p>
              <a class="slider__btn slider__link" target="_blank" href="https://www.google.com"><span class="btn_text">Option
                  6</span></a>
              <button class="slider__btn" onclick="openSlide('#slide-4')"><span class="btn_text">Option 7</span></button>
            </div>
          </div>
        </div>
        <div class="slide-container">
          <div id="slide-4" class="slider">
            <div class="wrapper">
              <p class="slider__text slider__text_center">Sample Text Line 1 Sample Text Line 2</p>
            </div>
          </div>
        </div>
  <?php } 
  ?>



  <script src="app.js"></script>
</body>

</html>