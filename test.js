QUnit.test("Test de la fonction direction", function (assert) {
    // LEFT
    direction({ keyCode: 37 });
    assert.strictEqual(d, "LEFT", "La direction devrait être LEFT");
});

QUnit.test("Test de la fonction direction", function (assert) {
    // UP
    direction({ keyCode: 38 });
    assert.strictEqual(d, "UP", "La direction devrait être UP");
});

QUnit.test("Test de la fonction direction", function (assert) {
    // RIGHT
    direction({ keyCode: 39 });
    assert.strictEqual(d, "RIGHT", "La direction devrait être RIGHT");
});

QUnit.test("Test de la fonction direction", function (assert) {
    // DOWN
    direction({ keyCode: 40 });
    assert.strictEqual(d, "DOWN", "La direction devrait être DOWN");
});

QUnit.test("Test de la fonction collision", function (assert) {

    const snake1 = [{ x: 100, y: 100 }, { x: 100, y: 120 }, { x: 100, y: 140 }];
    const head1 = { x: 100, y: 120 };
    assert.ok(collision(head1, snake1), "Collision devrait être détectée");
});



QUnit.test("Test de la fonction collision", function (assert) {
    const snake2 = [{ x: 100, y: 100 }, { x: 100, y: 120 }, { x: 100, y: 140 }];
    const head2 = { x: 200, y: 200 };
    assert.notOk(collision(head2, snake2), "Pas de collision devrait être détectée");
});

QUnit.test("Test de la fonction draw", function (assert) {

    assert.expect(0);
    draw();
});