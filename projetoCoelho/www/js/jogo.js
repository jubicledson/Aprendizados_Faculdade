

document.addEventListener('deviceready', onDeviceReady(), false);

function onDeviceReady() {
    pronto();
}

function pronto() {

    // Cria a aplicação PixiJS
    const app = new PIXI.Application({
        width: 400,
        height: 800,
        backgroundColor: 0x1099bb,
    });

    document.body.appendChild(app.view);

    // URL correta para a textura do coelho
    const bunnyUrl = 'https://pixijs.io/examples/examples/assets/bunny.png';

    // Carrega a textura do coelho
    PIXI.Loader.shared.add('bunny', bunnyUrl).load(function() {
        const bunny = new PIXI.Sprite(PIXI.Loader.shared.resources.bunny.texture);

        bunny.anchor.set(0.5);
        bunny.x = app.screen.width / 2;
        bunny.y = app.screen.height / 2;

        app.stage.addChild(bunny);

        app.ticker.add((delta) => {
            bunny.rotation += 0.1 * delta;
        });
    });
}