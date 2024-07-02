import requests
from itertools import cycle
import random
import time

# List of 4 proxies (replace with your working proxies)
proxies = [
    'http://191.96.42.80:8080',
    'http://191.96.42.82:8080',
    'http://191.96.42.81:8080',
    'http://191.96.42.83:8080',
]

# List of User-Agents
user_agents = [
    'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36',
    'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36',
    'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Firefox/89.0',
    'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:89.0) Gecko/20100101 Firefox/89.0',
]

# URL to visit
url = 'http://localhost:8000'  # Change to your localhost URL

# Create a cycle iterator for the proxies
proxy_pool = cycle(proxies)

# Function to visit the URL using a proxy
def visit_site():
    proxy = next(proxy_pool)
    user_agent = random.choice(user_agents)
    headers = {
        'User-Agent': user_agent,
        'Accept-Language': 'en-US,en;q=0.5'
    }
    try:
        response = requests.get(url, proxies={"http": proxy, "https": proxy}, headers=headers, timeout=10)
        print(f"Visited {url} with proxy {proxy} and User-Agent {user_agent}. Status code: {response.status_code}")
    except requests.exceptions.RequestException as e:
        print(f"Failed to visit {url} with proxy {proxy}. Error: {e}")

# Visit the site 50 times
for _ in range(50):
    visit_site()
    time.sleep(1)  # Add delay to avoid overwhelming the server

print("Finished visiting the site 50 times.")
