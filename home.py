#!/usr/bin/python
#
# Copyright (c) 2016 Daniel Coder
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#   http://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.

import bottle, os, base_app
import re

# Atributo de configuracao extraido do modulo base
root_folder = base_app.application.config['root_folder'] + "/";

# Rota unica site
@bottle.route('/')
def home_index():
    return bottle.template('home')

# Rota de arquivos estaticos (css, fonts e js)
@bottle.get("/<pasta:re:(css|js|fonts)>/<arquivo:path>")
def static_files(pasta, arquivo):
    return bottle.static_file(arquivo, root = root_folder + pasta)

# Rota de imagens (estao em duas possiveis pastas que eu checo antes)
@bottle.get("/images/<arquivo:path>")
def static_images(arquivo):
    destino = root_folder + 'images/' + arquivo
    if os.path.isfile(destino) == True:
        return bottle.static_file(arquivo, root = root_folder + "images/")
    else:
        return bottle.static_file(arquivo, root = root_folder + "css/images/")
