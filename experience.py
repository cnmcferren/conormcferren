from dataclasses import dataclass

@dataclass
class Experience:
    title: str
    date: str
    shortDescription: str
    longDescription: str
    image: str
    id: str