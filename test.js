QUnit.test("Test de la fonction direction", function(assert) {
    // Testez chaque direction possible
    direction({ keyCode: 37 }); // LEFT
    assert.strictEqual(d, "LEFT", "La direction devrait être LEFT");

    direction({ keyCode: 38 }); // UP
    assert.strictEqual(d, "UP", "La direction devrait être UP");

    direction({ keyCode: 39 }); // RIGHT
    assert.strictEqual(d, "RIGHT", "La direction devrait être RIGHT");

    direction({ keyCode: 40 }); // DOWN
    assert.strictEqual(d, "DOWN", "La direction devrait être DOWN");
});

QUnit.test("Test de la fonction collision", function(assert) {
    // Testez la fonction avec différents cas
    const snake1 = [{ x: 100, y: 100 }, { x: 100, y: 120 }, { x: 100, y: 140 }];
    const head1 = { x: 100, y: 120 };
    assert.ok(collision(head1, snake1), "Collision devrait être détectée");

    const snake2 = [{ x: 100, y: 100 }, { x: 100, y: 120 }, { x: 100, y: 140 }];
    const head2 = { x: 200, y: 200 };
    assert.notOk(collision(head2, snake2), "Pas de collision devrait être détectée");
});

QUnit.test("Test de la fonction draw", function(assert) {
    // Pour tester la fonction draw, nous devons nous assurer qu'elle ne provoque pas d'erreurs
    // Nous allons donc juste nous assurer qu'elle peut être appelée sans erreur.
    assert.expect(0);
    draw();
});