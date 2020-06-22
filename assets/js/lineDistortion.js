let canvas, ctx;
let mouseIn = false;

function setup() {
  canvas = createCanvas(windowWidth, (windowHeight * 0.63)-48);
  canvas.canvas.onmouseenter = () => mouseIn = true;
  canvas.canvas.onmouseleave = () => mouseIn = false;
  ctx = canvas.drawingContext;
  canvas.parent('lignes');
}

function easeInOutQuart(t, b, c, d) {// http://gizma.com/easing/#quart3
  t /= d / 2;
  if (t < 1) return c / 2 * t * t * t * t + b;
  t -= 2;
  return -c / 2 * (t * t * t * t - 2) + b;
}

function easeInOutSine(t, b, c, d) {// http://gizma.com/easing/#sin3
  return -c / 2 * (cos(PI * t / d) - 1) + b;
}

function draw() {
  background(0);

  stroke(255);
  strokeWeight(1);
  noFill();

  let w = min(width, height);

  let lCD = 14;
  let lC = ceil(w / lCD);
  let lS = ceil(w / 50);

  let o = createVector(width / 2 - w / 2, height / 2 - w / 2 + lCD / 2);
  let tO = Date.now() / 1800;

  let spots = [{ p: createVector(w / 2, w / 2) }];



  if (mouseIn) {
    let mouse = createVector(mouseX, mouseY);
    spots.push({
      p: mouse,
      r: w * 0.2,
      d: cos(tO * 8) * 5 });

  }

  strokeCap(PROJECT);

  for (let i = 0; i < lC; i++) {
    let c = i / lC;
    beginShape();
    for (let s = 0; s < lS; s++) {
      let t = s / (lS - 1);

      let x = t * w;
      let y = c * w;
      let p = createVector(x, y).add(o);

      let sO = spots.reduce((m, n) => {
        let d = n.p.dist(p);
        if (d > n.r) {
          return m;
        }
        //d = (1 - d / n.r) * 100;
        d = easeInOutSine(d / n.r, 1, -1, 1) * 12;
        let b = createVector(0, d * n.d);
        return m.add(b);
      }, createVector(0, 0));

      p.add(sO);

      curveVertex(p.x, p.y);
    }
    endShape();
  }
}

function windowResized() {
	resizeCanvas(windowWidth, windowHeight * 0.63);
}