#!/bin/bash

npm run build
zip -r theme.zip ./theme
rsync -r --progress ./theme.zip rock42596519749@p3nlpaas001.shr.prod.phx3.secureserver.net:/home/rock42596519749/html/wp-content/themes/
ssh rock42596519749@p3nlpaas001.shr.prod.phx3.secureserver.net