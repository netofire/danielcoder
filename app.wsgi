import os,sys
# Change working directory so relative paths (and template lookup) work again
os.chdir(os.path.dirname(__file__))
sys.path.append('/var/www/dcoder')

import bottle

application = bottle.default_app()

application.config['root_folder'] = os.getcwd()

import home
# ... build or import your bottle application here ...
# Do NOT use bottle.run() with mod_wsgi
