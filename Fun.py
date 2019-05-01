import requests

resp = requests.get('https://geek-jokes.sameerkumar.website/api')
if resp.status_code == 200:
    # This means something went wrong.
     return jsonify(resp) 
	