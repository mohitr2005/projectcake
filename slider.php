
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Loop</title>
    <style>

    .slider{
 height: 26.8rem;
 background-color: white;
}

.image-carousel {
  width: 70%;
  overflow: hidden;
  border-radius: 10px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
  margin-top: 40px;
  position: relative;
  left:15%;
}

.image-wrapper {
  display: flex;
  animation: scroll 10s linear infinite;
}

@keyframes scroll {
  0% {
      transform: translateX(0);
  }
  100% {
      transform: translateX(-100%);
  }
}

    </style>
</head>
<body>
    <div class="slider">
    <div class="image-carousel">
        <div class="image-wrapper">
            <img src="slider\p4.png" alt="Image 1">
            <img src="slider\p5.png" alt="Image 2">
            <img src="slider\p6.png" alt="Image 3">
            <img src="slider\p7.png" alt="Image 4">
            <img src="slider\p4.png" alt="Image 1">
            <img src="slider\p5.png" alt="Image 2">
            <img src="slider\p6.png" alt="Image 3">
            <img src="slider\p7.png" alt="Image 4">
            <img src="slider\p4.png" alt="Image 1">
            <img src="slider\p5.png" alt="Image 2">
            <img src="slider\p6.png" alt="Image 3">
            <img src="slider\p7.png" alt="Image 4">
        </div>
    </div>
    </div>
</body>
</html>
