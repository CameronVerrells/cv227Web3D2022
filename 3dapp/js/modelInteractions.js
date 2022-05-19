//adapted from example code 'benskitchen.com'

var spinning = false;

function spin(modelName)
{
    spinning = !spinning;
    document.getElementById(modelName+'__Can-TIMER').setAttribute('enabled', spinning.toString());
}

function stopRotation(modelName)
{
    spinning = false;
    document.getElementById(modelName+'__Can-TIMER').setAttribute('enabled', spinning.toString());
}

function animateModel(modelName)
{
    if(document.getElementById(modelName+'__Can-TIMER').getAttribute('enabled')!= 'true')
        document.getElementById(modelName+'__Can-TIMER').setAttribute('enabled', 'true');
    else
        document.getElementById(modelName+'__Can-TIMER').setAttribute('enabled', 'false');
}

function wireframe(modelName)
{
    var e = document.getElementById(modelName);
    e.runtime.togglePoints(true);
    e.runtime.togglePoints(true);
}

var lightOn = true;

function headlight(modelName)
{
    lightOn = !lightOn;
    document.getElementById(modelName+'__headlight').setAttribute('headlight', lightOn.toString());
}

function cameraFront(modelName)
{
    document.getElementById(modelName+'__CameraFront').setAttribute('bind', 'true');
}

function cameraBack(modelName)
{
    document.getElementById(modelName+'__CameraBack').setAttribute('bind', 'true');
}

function cameraLeft(modelName)
{
    document.getElementById(modelName+'__CameraLeft').setAttribute('bind', 'true');
}

function cameraRight(modelName)
{
    document.getElementById(modelName+'__CameraRight').setAttribute('bind', 'true');
}

function cameraTop(modelName)
{
    document.getElementById(modelName+'__CameraTop').setAttribute('bind', 'true');
}

function cameraBottom(modelName)
{
    document.getElementById(modelName+'__CameraBottom').setAttribute('bind', 'true');
}