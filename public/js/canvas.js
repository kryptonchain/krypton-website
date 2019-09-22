var check = document.getElementById("nokey");

if (document.getElementById("nokey") && check != null) {
  var canvas = document.getElementById("nokey"),
    can_w = parseInt(canvas.getAttribute("width")),
    can_h = parseInt(canvas.getAttribute("height")),
    ctx = canvas.getContext("2d");

  var ball = {
      x: 0,
      y: 0,
      vx: 0,
      vy: 0,
      r: 0,
      alpha: 1,
      phase: 0
    },
    ball_color = {
      r: 207,
      g: 255,
      b: 4
    },
    R = 2,
    balls = [],
    alpha_f = 0.03,
    alpha_phase = 0,
    // Line
    link_line_width = 0.8,
    dis_limit = 260,
    add_mouse_point = true,
    mouse_in = false,
    mouse_ball = {
      x: 0,
      y: 0,
      vx: 0,
      vy: 0,
      r: 0,
      type: "mouse"
    };

  // Random speed
  function getRandomSpeed(pos) {
    var min = -1,
      max = 1;
    switch (pos) {
      case "top":
        return [randomNumFrom(min, max), randomNumFrom(0.1, max)];
        break;
      case "right":
        return [randomNumFrom(min, -0.1), randomNumFrom(min, max)];
        break;
      case "bottom":
        return [randomNumFrom(min, max), randomNumFrom(min, -0.1)];
        break;
      case "left":
        return [randomNumFrom(0.1, max), randomNumFrom(min, max)];
        break;
      default:
        return;
        break;
    }
  }
  function randomArrayItem(arr) {
    return arr[Math.floor(Math.random() * arr.length)];
  }
  function randomNumFrom(min, max) {
    return Math.random() * (max - min) + min;
  }
  console.log(randomNumFrom(0, 10));
  // Random Ball
  function getRandomBall() {
    var pos = randomArrayItem(["top", "right", "bottom", "left"]);
    switch (pos) {
      case "top":
        return {
          x: randomSidePos(can_w),
          y: -R,
          vx: getRandomSpeed("top")[0],
          vy: getRandomSpeed("top")[1],
          r: R,
          alpha: 3,
          phase: randomNumFrom(0, 10)
        };
        break;
      case "right":
        return {
          x: can_w + R,
          y: randomSidePos(can_h),
          vx: getRandomSpeed("right")[0],
          vy: getRandomSpeed("right")[1],
          r: R,
          alpha: 3,
          phase: randomNumFrom(0, 10)
        };
        break;
      case "bottom":
        return {
          x: randomSidePos(can_w),
          y: can_h + R,
          vx: getRandomSpeed("bottom")[0],
          vy: getRandomSpeed("bottom")[1],
          r: R,
          alpha: 3,
          phase: randomNumFrom(0, 10)
        };
        break;
      case "left":
        return {
          x: -R,
          y: randomSidePos(can_h),
          vx: getRandomSpeed("left")[0],
          vy: getRandomSpeed("left")[1],
          r: R,
          alpha: 3,
          phase: randomNumFrom(0, 10)
        };
        break;
    }
  }
  function randomSidePos(length) {
    return Math.ceil(Math.random() * length);
  }

  // Draw Ball
  function renderBalls() {
    Array.prototype.forEach.call(balls, function(b) {
      if (!b.hasOwnProperty("type")) {
        ctx.fillStyle =
          "rgba(" +
          ball_color.r +
          "," +
          ball_color.g +
          "," +
          ball_color.b +
          "," +
          b.alpha +
          ")";
        ctx.beginPath();
        ctx.arc(b.x, b.y, R, 0, Math.PI * 2, true);
        ctx.closePath();
        ctx.fill();
      }
    });
  }

  // Update balls
  function updateBalls() {
    var new_balls = [];
    Array.prototype.forEach.call(balls, function(b) {
      b.x += b.vx;
      b.y += b.vy;

      if (b.x > -50 && b.x < can_w + 50 && b.y > -50 && b.y < can_h + 50) {
        new_balls.push(b);
      }

      // alpha change
      b.phase += alpha_f;
      b.alpha = Math.abs(Math.cos(b.phase));
      // console.log(b.alpha);
    });

    balls = new_balls.slice(0);
  }

  // loop alpha
  function loopAlphaInf() {}

  // Draw lines
  function renderLines() {
    var fraction, alpha;
    for (var i = 0; i < balls.length; i++) {
      for (var j = i + 1; j < balls.length; j++) {
        fraction = getDisOf(balls[i], balls[j]) / dis_limit;

        if (fraction < 1) {
          alpha = (1 - fraction).toString();

          ctx.strokeStyle = "rgba(150,150,150," + alpha + ")";
          ctx.lineWidth = link_line_width;

          ctx.beginPath();
          ctx.moveTo(balls[i].x, balls[i].y);
          ctx.lineTo(balls[j].x, balls[j].y);
          ctx.stroke();
          ctx.closePath();
        }
      }
    }
  }

  // calculate distance between two points
  function getDisOf(b1, b2) {
    var delta_x = Math.abs(b1.x - b2.x),
      delta_y = Math.abs(b1.y - b2.y);

    return Math.sqrt(delta_x * delta_x + delta_y * delta_y);
  }

  // add balls if there a little balls
  function addBallIfy() {
    if (balls.length < 20) {
      balls.push(getRandomBall());
    }
  }

  // Render
  function render() {
    ctx.clearRect(0, 0, can_w, can_h);

    renderBalls();

    renderLines();

    updateBalls();

    addBallIfy();

    window.requestAnimationFrame(render);
  }

  // Init Balls
  function initBalls(num) {
    for (var i = 1; i <= num; i++) {
      balls.push({
        x: randomSidePos(can_w),
        y: randomSidePos(can_h),
        vx: getRandomSpeed("top")[0],
        vy: getRandomSpeed("top")[1],
        r: R,
        alpha: 1,
        phase: randomNumFrom(0, 10)
      });
    }
  }
  // Init Canvas
  function initCanvas() {
    canvas.setAttribute("width", window.innerWidth - 25);
    canvas.setAttribute("height", window.innerHeight);

    can_w = parseInt(canvas.getAttribute("width"));
    can_h = parseInt(canvas.getAttribute("height"));
  }
  window.addEventListener("resize", function(e) {
    console.log("Window Resize...");
    initCanvas();
  });

  function goMovie() {
    initCanvas();
    initBalls(30);
    window.requestAnimationFrame(render);
  }
  goMovie();

  // Mouse effect
  canvas.addEventListener("mouseenter", function() {
    console.log("mouseenter");
    mouse_in = true;
    balls.push(mouse_ball);
  });
  canvas.addEventListener("mouseleave", function() {
    console.log("mouseleave");
    mouse_in = false;
    var new_balls = [];
    Array.prototype.forEach.call(balls, function(b) {
      if (!b.hasOwnProperty("type")) {
        new_balls.push(b);
      }
    });
    balls = new_balls.slice(0);
  });
  canvas.addEventListener("mousemove", function(e) {
    var e = e || window.event;
    mouse_ball.x = e.pageX;
    mouse_ball.y = e.pageY;
    // console.log(mouse_ball);
  });

  /** SLIDESHOW JS */
  var slideshow = {
    /* [THE OPTIONS] */
    delay: 4000, // time in between each slide

    /* [THE MECHANICS] */
    container: null, // HTML slides container
    caption: null, // HTML caption container
    slides: [], // array to hold all the slide data
    current: 0, // pointer, the current slide
    timer: null, // to hold the timer object

    start: function() {
      // slideshow.start() : start the slideshow

      // GET THE ELEMENTS
      slideshow.container = document.getElementById("slides");
      slideshow.caption = document.getElementById("slide-caption");

      // GET ALL SLIDES DATA
      let all = slideshow.container.getElementsByTagName("img");
      if (all.length > 0) {
        for (let slide of all) {
          slideshow.slides.push({
            src: slide.src,
            caption: slide.dataset.caption
          });
        }

        // ATTACH NEXT/PREVIOUS BUTTONS
        document
          .getElementById("slide-left")
          .addEventListener("click", slideshow.prev);
        document
          .getElementById("slide-right")
          .addEventListener("click", slideshow.next);

        // START ROLLING
        slideshow.draw();
      }
    },

    draw: function() {
      // slideshow.draw() : draw current slide + prime timer

      // CREATE SLIDE
      var next = document.createElement("img");
      next.src = slideshow.slides[slideshow.current].src;
      next.classList.add("ninja");
      slideshow.container.innerHTML = "";
      slideshow.container.appendChild(next);

      // SILLY BUG. DIRECTY REMOVING THE CLASS WILL NOT FIRE THE CSS ANIMATION
      // WILL HAVE TO WAIT FOR A SPLIT SECOND TO PROPERLY RUN THE ANIMATION
      setTimeout(function() {
        next.classList.remove("ninja");
      }, 1);

      // SET TIMER FOR NEXT SLIDE
      slideshow.timer = setTimeout(slideshow.next, slideshow.delay);
    },

    next: function() {
      // slideshow.next() : go to next slide

      // CLEAR OLD TIMER FIRST
      if (slideshow.timer != null) {
        clearTimeout(slideshow.timer);
        slideshow.timer = null;
      }

      // TO THE NEXT SLIDE
      slideshow.current++;

      // ENDED - ROTATE BACK TO THE FIRST SLIDE
      if (slideshow.current == slideshow.slides.length) {
        slideshow.current = 0;
      }
      slideshow.draw();
    },

    prev: function() {
      // slideshow.prev() : go to last slide

      // CLEAR OLD TIMER FIRST
      if (slideshow.timer != null) {
        clearTimeout(slideshow.timer);
        slideshow.timer = null;
      }

      // TO THE NEXT SLIDE
      slideshow.current--;

      // ENDED - ROTATE BACK TO THE FIRST SLIDE
      if (slideshow.current < 0) {
        slideshow.current = slideshow.slides.length - 1;
      }
      slideshow.draw();
    }
  };

  // FIRE UP SLIDE SHOW ON PAGE LOAD
  window.addEventListener("load", slideshow.start);
}
