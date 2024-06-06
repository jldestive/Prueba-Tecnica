# Seccion 3: GIT

## 1

Git es un sistema de control de versiones que permite tener una gestion de las
varias versiones de una aplicacion por medio de un historial de comits, que son
como impresiones del estado actual de cada archivo cambiado en un momento
especifico del desarrollo. Permite crear varias ramas, resolver conflictos entre
ellas, el desarrollo entre varios desarrolladores y la colaboracion de estos en
la implementacion de features, la creacion de forks de proyectos, creacion de
proyectos de codigo abierto y privados y la implementacion de CI/CD.

## 2

git clone <nombre del repo>

## 3

una rama o branch es un flujo de trabajo que guarda el historico de commits de
la aplicacion, lo que permite volver a un estado anterior del desarrollo y la
correcion de errores en la aplicacion antes de hacer live del proyecto

## 4

git checkout -b feature-xyz git switch main git merge feature-xyz

## 5

son conflictos que ocurren cuando dos o mas desarrolladores trabajan en un mismo
archivo en una misma rama, se resuleve aceptando los cambios de cada
desarrollador segun sea necesario de forma que ambas implementaciones, si son
correctas y no son sobre el mismo problema de desarrollo, queden implementadas
en la rama sin errores

## 6

git status

## 7

git pull sirve para recoger y hacer merge de los ultimos cambios del repo actual
git fetch sirve para traerse los ultimos cambios del repo actual pero no los
aplica, sirve para ver los ultimos cambios sin hacerles merge a la rama actual

## 8

git reset HEAD~1

## 9

un remote repository es una version del proyecto guardada en servicios como
GitHub o GitLab, para agregar un repo remoto se usa este comando:

git remote add origin <url del repo>

## 10

git add . git commit -m "Initial commit"
