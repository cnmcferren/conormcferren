#!/home1/conormcf/venv/conormcferren/bin/python3

from flask import Flask, render_template, request, send_from_directory, redirect, url_for, session
import databaseconnector
from experience import Experience
from waitress import serve

app = Flask(__name__, 
    static_url_path='', 
    static_folder='static', 
    template_folder='templates')

@app.route('/')
@app.route('/index')
@app.route('/home')
def index():
    database = databaseconnector.databaseObject()
    skills = dict(database.query("SELECT title, rating FROM skills"))
    tools = dict(database.query("SELECT title, rating FROM tools"))
    languages = dict(database.query("SELECT title, rating FROM languages"))
    experience = database.query("SELECT title, dates, shortDescription, longDescription, image, id FROM experience")
    experienceStructs = []
    for line in experience:
        newStruct = Experience(line[0],
                                line[1],
                                line[2],
                                line[3],
                                line[4],
                                'a' + str(line[5])
                                )
        experienceStructs.append(newStruct)

    database.close()
    return render_template('index.html', skills=skills, tools=tools, languages=languages, experiences=experienceStructs)

@app.errorhandler(404)
def page_not_found(error):
    render_template('404.html')

if __name__ == '__main__':
    app.run(host='0.0.0.0', threaded=True)
	#serve(app, host='0.0.0.0', port=5000)
	#app.run()
