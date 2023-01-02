from flask import Flask, request
from flask_restful import Api, Resource, reqparse

video_put_args = reqparse.RequestParser()
video_put_args.add_argument("like", type=int)
video_put_args.add_argument("time", type=int)
video_put_args.add_argument("sender", type=str)
video_put_args.add_argument("view", type=int)
video_put_args.add_argument("name", type=str)


videos = {
    0:{
        "like":10,
        "time":145,
        "view":200,
        "sender":"Ali",
        "name":"flask course"
    }
}


app = Flask(__name__)
api = Api(app=app)

class Video(Resource):
    def get(self, video_id):
        if video_id in videos:
            return videos[video_id], 200
        else:
            return {
                "Message":"video not found"
            }, 404

    def put(self, video_id):
        if video_id not in videos:
            videos[video_id] = {
                "like": request.form.get("like") or 0,
                "time": request.form.get("time") or 60,
                "view": request.form.get("view") or 0,
                "sender": request.form.get("sender") or "ananymous"
            }
            return videos[video_id], 201
        else:
            return {
                "Message":"Oops, this video already exist!"
            }, 300

api.add_resource(Video, "/video/<int:video_id>")
if __name__ == "__main__":
    app.run(debug=True)
    