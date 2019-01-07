# Github Pages

#### Project Pages >>  username.github.io/repo-name
1. Initialize a local respository
2. Add respository to Github
3. Create a Github pages branch
4. Wait for Github pages to build the site


##### 'gh-pages' branch is for the Github pages website only. This is where we push any changes that need to appear on the site
###### git checkout -b gh-Pages
###### git branch
###### ls
###### git push origin gh-Pages

#### Making Changes to Project Pages:
##### Make changes in local project folders
##### Push changes to the "gh-pages" branch of project pages repo


#### User Pages >>  username.github.io
##### Create a repo. Make sure it matches the username exactly
###### Steps:
1. cd portfolio/username
2. git init
3. git status
4. git add .
5. git status
6. git commit -m "initial commit"
7. git remote add origin git @github.com:username/portfolio.git
8. git push -u origin master
9. git checkout -b gh-pages // to display on github
10. git branch
11. ls
12. git push origin gh-pages
