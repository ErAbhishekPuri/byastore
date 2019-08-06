var fs = require('fs-extra');
var path = require('path');
var mainFile = require('./captainform-paths')().captainform.mainFile;
var pluginDir = require('./captainform-paths')().captainform.pluginDir;

fs.copySync(
    path.resolve(__dirname,'../dist/blocks.build.js'), 
    path.resolve(__dirname, '../../' + pluginDir + '/admin/gutenberg/blocks.build.js')
);
fs.copySync(
    path.resolve(__dirname,'../dist/blocks.editor.build.css'), 
    path.resolve(__dirname, '../../' + pluginDir + '/admin/gutenberg/blocks.editor.build.css')
);
fs.copySync(
    path.resolve(__dirname,'../dist/blocks.style.build.css'), 
    path.resolve(__dirname, '../../' + pluginDir + '/admin/gutenberg/blocks.style.build.css')
);
fs.copySync(
    path.resolve(__dirname,'../src/init.php'), 
    path.resolve(__dirname, '../../' + pluginDir + '/admin/gutenberg/init.php')
);

console.log('Files copied to admin/gutenberg directory.');

var mainCaptainFormFile = path.resolve(__dirname, '../../' + mainFile);
var gutenbergInitFile = path.resolve(__dirname, '../../' + pluginDir + '/admin/gutenberg/init.php');

captainformFixProdFiles(
    mainCaptainFormFile,
    "include ABSPATH . 'wp-content/plugins/captainform-gutenberg-block/src/init.php';",
    "include plugin_dir_path( __FILE__ ) . 'admin/gutenberg/init.php';"
);

captainformFixProdFiles(
    gutenbergInitFile,
    /dist\/blocks/gi,
    "gutenberg/blocks"
);

setTimeout(()=>{
    captainformFixProdFiles(
        gutenbergInitFile,
        /-dev-/gi,
        "-"
    );
}, 250);

setTimeout(()=>{
    captainformFixProdFiles(
        gutenbergInitFile,
        /_dev_/gi,
        "_"
    );
}, 450);

if ( pluginDir === '123contactform-for-wordpress') {
    setTimeout(()=>{
        captainformFixProdFiles(
            gutenbergInitFile,
            /captain-form-/gi,
            "formbuilder-123-"
        );
    }, 550);

    setTimeout(()=>{
        captainformFixProdFiles(
            gutenbergInitFile,
            /captain_form_/gi,
            "formbuilder_123_"
        );
    }, 700);
}

function captainformFixProdFiles(filePath, dataToReplace, dataReplaceWith) {
    fs.readFile(filePath, 'utf8', function(err, data) {
        if (err) {
          return console.log(err);
        }

        var result = data.replace(dataToReplace, dataReplaceWith);
    
        fs.writeFile(filePath, result, 'utf8', function(err) {
            if (err) {
               return console.log(err);
            };
        });
    });
}

console.log('Gutenberg pointer changed from src/init.php to admin/gutenberg/init.php');