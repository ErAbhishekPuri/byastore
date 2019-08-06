var fs = require('fs-extra');
var path = require('path');
var mainFile = require('./captainform-paths')().captainform.mainFile;

captainformMoveDevFilesToProd(
    path.resolve(__dirname,'../../' + mainFile),
    "include plugin_dir_path( __FILE__ ) . 'admin/gutenberg/init.php';",
    "include ABSPATH . 'wp-content/plugins/captainform-gutenberg-block/src/init.php';"
);

function captainformMoveDevFilesToProd(filePath, dataToReplace, dataReplaceWith) {
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

console.log('Gutenberg pointer changed from admin/gutenberg/init.php to src/init.php');