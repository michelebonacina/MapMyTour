# MapMyTour
Web Application for managing GPS tour around the world.

## In progress
Added only Laravel base project

## Standard Point
A Standard Point is the base for every other points types. Contains informations about:
- latitude: the geographical latitude of the point, in decimal format
- longitude: the geographical longitude of the point, in decimal format
- altutide: the elevation of the point, as an integer value

The Standard Point cannot be used standalone; it's extended by specialized points types.

## Waypoints
A waypoint adds to Standard Point a name
