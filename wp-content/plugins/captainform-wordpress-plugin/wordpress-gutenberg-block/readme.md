## CaptainForm / 123FormBuilder WP Gutenberg Workflow

Pentru a putea compila codul pentru blocurile Gutenberg, Node.js / npm sunt necesare. 
Ca un shortcut pentru restul configurarilor necesare (webpack, babel, linting etc), s-a folosit pachetul npm **create-guten-block** ( https://github.com/ahmadawais/create-guten-block ). 

Functionalitatea pentru editorul (gutenberg) din WP v5+ este in folderul **admin/gutenberg** . 
In acest folder avem urmatoarele fisiere: 
    - blocks.build.js
    - blocks.editor.build.css
    - blocks.style.build.css
    - init.php
Hook-urile wordpress ale block-ului sunt create in **init.php** ce este inclus in plugin la finalul fisierului **captainform.php**.

In instanta locala de wordpress unde se va face developmentul, va trebui copiat pluginul din git **main/modules/captainform-plugin/captainform-gutenberg-block** alaturi de cel de captainform. Trebuie confirmat ca pluginul de development este ok in dashboardul de wordpress, in pagina de plugins. Daca **captainform-gutenberg-block** nu este prezent acolo, developmentul pe block-ul de captainform nu va merge ( aici sunt toate fisierele si pachetele de compilare a codului )

Odata captainform-gutenberg-block copiat in plugins, trebuie rulat **npm install** pentru a instala dependency-urile. Functionalitatea este in **src/block/block.js**. 
**npm start** sau **npm run start** va modifica fisierul captainform.php din pluginul captainform sa pointeze catre fisierele de development. Tot acest script va porni un watcher ce va recompila fisierele din src la fiecare save. 
**npm run build** va crea build-ul final, va muta fisierele necesare din **captainform-gutenberg-block/dist** in pluginul de captainform in **captainform/admin/gutenberg** si va face revert la pointarea din scriptul **npm run start**.

Flow-ul este la fel si pentru pluginul 123Formbuilder, cu urmatoarele diferente:
    - in **captainform-guten-block/src/blocks.js** trebuie utilizat **./block/block_123fb.js** in loc de ceea ce este default - **./block/block_cpf.js**.
    - in **scripts/captainform-build.js** si **scripts/captainform-start.js** trebuie schimbate variabilele **mainFile** si **pluginDir** sa foloseasca **formbuilder123** in loc de **captainform**