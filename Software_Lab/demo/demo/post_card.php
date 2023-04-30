<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="post_card.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>Document</title>
</head>
<body>
  
<div class="container">
<div class="card">

    <div class="card-header">
      <h5 class="username">User-name</h5>
      <span class="time">28th April 2023 8:04 PM</span>
    </div>

    <div class="card-img">
      <img src="img2.jpeg" alt="Image" class="card-img-top">
    </div>

    <div class="card-body">
      <h5 class="card-title">Card Title Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum, assumenda reiciendis culpa vitae laboriosam ex fugit quae quod quo! Quae.</h5>
      <?php 
        $text = "Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste cupiditate quibusdam voluptatem corporis beatae ab facere reprehenderit fugiat dolores, aperiam impedit odio molestias accusantium delectus laboriosam, voluptatum modi. Quidem nam repellat natus eum, illo, laboriosam delectus facilis, molestias quaerat tempora qui aperiam libero voluptatem doloribus? Natus sunt facilis fugiat unde quis facere quae illo recusandae cum pariatur iusto, voluptate, mollitia harum dolor eos excepturi! Sit, saepe beatae totam repudiandae neque alias, consequuntur laudantium fugit itaque quod doloremque? Ea necessitatibus sequi neque labore, natus voluptatum? Ipsam a nemo dolorum facere quas ut animi libero, quo cupiditate, possimus accusamus alias sint et.";
        $text = explode(" ", $text);
        $num_words = count($text);
        $new_text = implode(" ", array_slice($text, 0, 30));
        echo '<p class="card-text">'.$new_text.'</p>';
      ?>
      <?php if ($num_words > 30): ?>
        <p class="card-text" style="display:none"><?php echo implode(" ", array_slice($text, 30)); ?></p>
        <a href="#" class="read-more">See more</a>
      <?php endif; ?>
    </div>

    <!-- <div class="card-buttons d-flex justify-content-start">
    <a href="#" class="react-btn btn btn-outline-secondary btn-lg me-2"><i class="fas fa-thumbs-up fa-lg"></i></a>
    <a href="#" class="comment-btn btn btn-outline-secondary btn-lg"><i class="fas fa-comment fa-lg"></i></a>
  </div> -->
      
</div>
</div>

<script>
    var readMoreBtns = document.querySelectorAll(".read-more");
    for (var i = 0; i < readMoreBtns.length; i++) {
      readMoreBtns[i].addEventListener("click", function() {
        var cardText = this.previousElementSibling;
        if (cardText.style.display === "none") {
          cardText.style.display = "inline";
          this.innerHTML = "See less";
        } else {
          cardText.style.display = "none";
          this.innerHTML = "See more";
        }
      });
    }
</script>


<script>
    const reactBtns = document.querySelectorAll('.react-btn');
const commentBtns = document.querySelectorAll('.comment-btn');

reactBtns.forEach(btn => {
  btn.addEventListener('click', () => {
    // Add your logic for the React button here
    console.log('React button clicked');
  });
});

commentBtns.forEach(btn => {
  btn.addEventListener('click', () => {
    // Add your logic for the Comment button here
    console.log('Comment button clicked');
  });
});
</script>
    
</body>
</html>