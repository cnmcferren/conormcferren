#!/home1/conormcf/venv/conormcferren/bin/python3

from flup.server.fcgi import WSGIServer
from main import app as application

WSGIServer(application).run()
