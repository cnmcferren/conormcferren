#!/home1/conormcf/venv/conormcferren/bin/python3

from flup.server.fcgi import WSGIServer
from main import app as application
import sys

WSGIServer(application,('127.0.0.1',8080)).run()
