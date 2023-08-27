import subprocess
import re

def get_git_branch():
    try:
        result = subprocess.check_output(['git', 'branch', '--show-current'], stderr=subprocess.STDOUT)
        branch_name = result.decode('utf-8').strip()
        return branch_name
    except subprocess.CalledProcessError:
        return "Unknown"    

def replace_dynamicbranch(match):
    branch_name = get_git_branch()
    first_three_characters = branch_name[:3]
    return first_three_characters

with open('index.md', 'r') as file:
    content = file.read()

content = re.sub(r'{% dynamicbranch %}', replace_dynamicbranch, content)
with open('index.md', 'w') as file:
    file.write(content)
