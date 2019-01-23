#  React Deployment to GitHub



 ```
 npm run build
 ```  
To create a build directory

### Static Server
 ```
 npm install -g serve
 serve -s build
 ```

## Setup the github homepage
###### "homepage":"http://myname.github.io/myapp"

```
npm install --save gh-pages
```
######  Alternate for yarn:
```
yarn add gh-pages
```

####  package.json

```
"scripts": {
+   "predeploy": "npm run build",
+   "deploy": "gh-pages -d build",
    "start": "react-scripts start",
    "build": "react-scripts build",    
```
```
"scripts": {
  "predeploy": "npm run build",
-   "deploy": "gh-pages -d build",
+   "deploy": "gh-pages -b master -d build",
```

```
"homepage": "http://myname.github.io/myapp"
```
```
"scripts": {
  "predeploy": "npm run build",
  "deploy": "gh-pages -d build",
  ...
}
```

```
npm run deploy

```
