#!/usr/bin/python
# -*- coding: utf-8 -*-
# Product Service

# Import framework

from flask import Flask
from flask_restful import Resource, Api

# Instantiate the app

app = Flask(__name__)
api = Api(app)


class Product(Resource):

    def get(self):
        return {'products': [   # returns JSON
            'MP3-Player',
            'Powerbank',
            'Beamer',
            'Gaming-PC',
            'H\xc3\xb6henverstellbarer Schreibtisch',
            'Multifunktionsdrucker',
            'Blu-ray-Player',
            'PC-Maus',
            'Externe Festplatte',
            ]}


# Create routes

api.add_resource(Product, '/')

# Run the application

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=80, debug=True)

# A real API would output much more information and details but for an example this will do.