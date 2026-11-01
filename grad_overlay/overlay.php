<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Graduation Overlay</title>

<style>
  body {
    margin: 0;
    background: transparent;
    overflow: hidden;
    font-family: 'Segoe UI', sans-serif;
    color: #fff;
  }

  .container {
    position: absolute;
    bottom: 40px;
    left: 60px;
    background: rgba(0,0,0,0.6);
    padding: 20px 40px;
    border-radius: 10px;
    font-size: 32px;
    animation: slideIn 1s ease;
  }

  @keyframes slideIn {
    from { transform: translateX(-50px); opacity: 0; }
    to { transform: translateX(0); opacity: 1; }
  }

  #name, #degree, #cap {
    transition: opacity 1s ease;
  }

  #degree {
    font-size: 24px;
    color: #ffcc00;
    margin-top: 10px;
  }

  #cap {
    display: inline-block;
    margin-right: 10px;
  }
</style>

<script>
async function fetchNext() {
  const response = await fetch('next.php');
  const data = await response.json();

  const nameDiv = document.getElementById('name');
  const degreeDiv = document.getElementById('degreeText');
  const capIcon = document.getElementById('cap');

  // Fade out
  nameDiv.style.opacity = 0;
  degreeDiv.style.opacity = 0;
  capIcon.style.opacity = 0;

  // Wait for fade-out, then update content and fade back in
  setTimeout(() => {
    nameDiv.textContent = data.full_name || '';
    degreeDiv.textContent = data.degree || '';
    
    nameDiv.style.opacity = 1;
    degreeDiv.style.opacity = 1;
    capIcon.style.opacity = 1;
  }, 1000);
}

// Fetch every 5 seconds
setInterval(fetchNext, 6000);
window.onload = fetchNext;
</script>
</head>
<body>
  <div class="container">
    <div id="name"></div>
    <div id="degree">
      <span id="cap">🎓</span>
      <span id="degreeText"></span>
    </div>
  </div>
</body>
</html>

